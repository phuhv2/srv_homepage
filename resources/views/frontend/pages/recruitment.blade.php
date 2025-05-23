@extends('frontend.layouts.master')
@section('title','Recruitment - Sumirubber Vietnam ltd')
@section('main-content')
    <!-- Free Quote Section Start -->
    <div id="rs-freequote" class="rs-freequote style1 modify pt-80 pb-106 md-pt-72 md-pb-78">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 pl-65 md-pl-15">
                    <div id="form-alert" class="alert" style="display: none;"></div>

                    <form id="recruitment-form" class="quote-form" enctype="multipart/form-data">
                        @csrf
                        <div class="sec-title mb-53">
                            <h2 class="title white-color mb-0">{{ __('recruitment.title') }}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="{{ __('recruitment.name') }}" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="{{ __('recruitment.email') }}" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="phone" placeholder="{{ __('recruitment.phone') }}" required="">
                            </div>
                            <div class="col-md-12">
                                <select name="subject" class="recruit-select">
                                    <option value="0">-- {{ __('recruitment.position') }} --</option>
                                    <option value="worker">Công Nhân</option>
                                    <option value="qa">Nhân Viên Phòng Chất Lượng (QA)</option>
                                    <option value="plan">Nhân Viên Kế Hoạch Sản Xuất</option>
                                    <option value="pro">Nhân Viên Quản Lý Sản Xuất</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">
                                <small style="margin-bottom: 10px; margin-top: -20px;" class="form-text text-muted">{{ __('recruitment.cv_note') }}</small>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="readon modify">{{ __('recruitment.submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Free Quote Section End -->

@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            const $form = $('#recruitment-form');
            const $alertBox = $('#form-alert');
            const $submitBtn = $form.find('button[type="submit"]');
            const $subjectSelect = $('select[name="subject"]');
            const $cvInput = $('input[name="cv"]');

            function showAlert(message, type) {
                $alertBox
                    .removeClass()
                    .addClass('alert alert-' + type)
                    .html(message)
                    .show();

                setTimeout(() => {
                    $alertBox.fadeOut();
                }, 5000);
            }

            function validateCvFile(file) {
                if (!file) return true; // CV is optional except for non-worker positions

                const maxSize = 2 * 1024 * 1024; // 2MB in bytes
                const allowedTypes = ['application/pdf', 'application/msword',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

                if (!allowedTypes.includes(file.type)) {
                    showAlert('Vui lòng chọn file PDF, DOC hoặc DOCX!', 'danger');
                    return false;
                }

                if (file.size > maxSize) {
                    showAlert('File CV không được vượt quá 2MB!', 'danger');
                    return false;
                }

                return true;
            }

            function toggleCvInput() {
                if ($subjectSelect.val() === 'worker') {
                    $cvInput.prop('disabled', true).val('');
                } else {
                    $cvInput.prop('disabled', false);
                    if ($cvInput[0].files.length > 0 && !validateCvFile($cvInput[0].files[0])) {
                        $cvInput.val('');
                    }
                }
            }

            // Initial call when page loads
            toggleCvInput();

            // Call on select change
            $subjectSelect.on('change', toggleCvInput);

            // Validate CV on file input change
            $cvInput.on('change', function() {
                if (this.files.length > 0) {
                    if (!validateCvFile(this.files[0])) {
                        this.value = '';
                    }
                }
            });

            $form.on('submit', function (e) {
                e.preventDefault();

                // Validate CV if position is not worker
                if ($subjectSelect.val() !== 'worker' && $cvInput[0].files.length === 0) {
                    showAlert('Vui lòng tải lên file CV!', 'danger');
                    return;
                }

                // Validate CV file if present
                if ($cvInput[0].files.length > 0 && !validateCvFile($cvInput[0].files[0])) {
                    return;
                }

                $submitBtn.prop('disabled', true).text('Đang gửi...');

                const formData = new FormData(this);

                $.ajax({
                    url: "{{ route('recruitment.store') }}",
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function (response) {
                        showAlert(response.message || 'Đã gửi đơn ứng tuyển thành công!', 'success');
                        $form[0].reset();
                        toggleCvInput();
                    },
                    error: function (xhr) {
                        let errors = 'Đã xảy ra lỗi. Vui lòng thử lại!';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errors = '';
                            $.each(xhr.responseJSON.errors, function (key, messages) {
                                errors += '<div>' + messages[0] + '</div>';
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.error) {
                            errors = xhr.responseJSON.error;
                        }
                        showAlert(errors, 'danger');
                    },
                    complete: function () {
                        $submitBtn.prop('disabled', false).text('Gửi Ngay');
                    }
                });
            });
        });
    </script>
@endpush
