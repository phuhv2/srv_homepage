<div id="messages">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        @if(count(Helper::messageList())>5)
            <span data-count="5" class="badge badge-danger badge-counter">5+</span>
        @elseif(count(Helper::messageList())>0)
            <span data-count="{{count(Helper::messageList())}}"
                  class="badge badge-danger badge-counter">{{count(Helper::messageList())}}</span>
        @endif
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
         aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
            Hồ sơ ứng tuyển
        </h6>
        <div id="message-items">
            @foreach(Helper::messageList() as $message)
                <a class="dropdown-item d-flex align-items-center" href="{{route('message.show',$message->id)}}">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{asset('backend/img/avatar.png')}}" alt="default img">
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">{{$message->subject}}</div>
                        <div class="small text-gray-500">{{$message->name}}
                            · {{$message->created_at->diffForHumans()}}</div>
                    </div>
                </a>
                @if($loop->index+1==5)
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </div>
        <a class="dropdown-item text-center small text-gray-500" href="{{route('message.index')}}">Hiển thị thêm hồ sơ</a>
    </div>
</div>

