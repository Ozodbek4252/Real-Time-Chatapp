@extends('layouts.front')

@section('content')
  <div class="container-fluid">
    <div class="d-lg-flex">
      <div class="chat-leftsidebar card" style="margin-bottom: 0px; height: 100vh;">
        <div class="p-3 px-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3 align-self-center">
              <img src="/assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle" alt="">
            </div>

            <div class="flex-grow-1">
              <h5 class="font-size-16 mb-1"><a href="chat.html#" class="text-dark">Marcus <i
                    class="mdi mdi-circle text-success align-middle font-size-10 ms-1"></i></a></h5>
              <p class="text-muted mb-0">Available</p>
            </div>

            <div class="flex-shrink-0">
              <div class="dropdown chat-noti-dropdown">
                <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="uil uil-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="chat.html#">Profile</a>
                  <a class="dropdown-item" href="chat.html#">Edit</a>
                  <a class="dropdown-item" href="chat.html#">Add Contact</a>
                  <a class="dropdown-item" href="chat.html#">Setting</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="p-3">
          <div class="search-box chat-search-box">
            <div class="position-relative">
              <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
              <i class="uil uil-search search-icon"></i>
            </div>
          </div>
        </div>

        {{-- <div class=""> --}}
        <div id="calc" data-simplebar style="height: calc(100vh - 161px);">
          <div class="p-4 border-top">
            <div>
              <div class="float-end">
                <a href="chat.html" class="text-primary"><i class="mdi mdi-plus"></i> New Group</a>
              </div>
              <h5 class="font-size-16 mb-3"><i class="uil uil-users-alt me-1"></i> Groups</h5>

              <ul class="list-unstyled chat-list group-list">
                <li>
                  <a href="chat.html#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                          <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                            G
                          </span>
                        </div>
                      </div>

                      <div class="flex-grow-1">
                        <h5 class="font-size-14 mb-0">General</h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="active">
                  <a href="chat.html#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                          <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                            <i class="uil uil-edit-alt"></i>
                          </span>
                        </div>
                      </div>

                      <div class="flex-grow-1">
                        <h5 class="font-size-14 mb-0">Designers</h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                          <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                            <i class="uil uil-users-alt"></i>
                          </span>
                        </div>
                      </div>

                      <div class="flex-grow-1">
                        <h5 class="font-size-14 mb-0">Meeting</h5>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="p-4 border-top">
            <div>
              <div class="float-end">
                <a href="chat.html" class="text-primary"><i class="mdi mdi-plus"></i> New Contact</a>
              </div>
              <h5 class="font-size-16 mb-3"><i class="uil uil-user me-1"></i> Contacts</h5>

              <ul class="list-unstyled chat-list">
                {{-- <li>
                    <a href="chat.html#">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3 align-self-center">
                          <div class="user-img online">
                            <img src="/assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                            <span class="user-status"></span>
                          </div>
                        </div>

                        <div class="flex-grow-1 overflow-hidden">
                          <h5 class="text-truncate font-size-14 mb-1">John Howard</h5>
                          <p class="text-truncate mb-0">Hey! there I'm available</p>
                        </div>

                        <div class="flex-shrink-0">
                          <div class="font-size-11">02 min</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="unread">
                    <a href="chat.html#">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3 align-self-center">
                          <div class="user-img online">
                            <div class="avatar-xs align-self-center">
                              <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                G
                              </span>
                            </div>
                            <span class="user-status"></span>
                          </div>
                        </div>

                        <div class="flex-grow-1 overflow-hidden">
                          <h5 class="text-truncate font-size-14 mb-1">Galen Rizo</h5>
                          <p class="text-truncate mb-0">I've finished it! See you so</p>
                        </div>

                        <div class="flex-shrink-0">
                          <div class="font-size-11">10 min</div>
                          <div class="unread-message">
                            <span class="badge bg-danger rounded-pill">01</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li> --}}
                @if (count($users))
                  @foreach ($users as $user)
                    <li>
                      <a href="{{ Route('message.conversation', $user->id) }}">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0 align-self-center me-3">
                            <div class="user-img online">
                              <div class="avatar-xs align-self-center">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                  {{ $user->name[0] }}{{ $user->last_name[0] }}
                                </span>
                              </div>
                              <span class="user-status"></span>
                            </div>
                          </div>

                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="text-truncate font-size-14 mb-1">{{ $user->name }} {{ $user->last_name }}</h5>
                            <p class="text-truncate mb-0">Wow that's great</p>
                          </div>

                          <div class="flex-shrink-0">
                            <div class="font-size-11">04 Hrs</div>
                          </div>
                        </div>
                      </a>
                    </li>
                  @endforeach
                @endif
              </ul>
            </div>
          </div>
        </div>
        {{-- </div> --}}

      </div>
      <!-- end chat-leftsidebar -->

      <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
        <div class="card" style="margin-bottom: 0px; height: 100vh;">
          <div class="p-3 px-lg-4 border-bottom">
            <div class="row">
              <div class="col-md-4 col-6" style="display: flex; align-items: center;">
                <div class="flex-shrink-0 align-self-center me-3">
                  <div class="user-img online">
                    <div class="avatar-xs align-self-center">
                      <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                        {{ $user->name[0] }}{{ $user->last_name[0] }}
                      </span>
                    </div>
                    <span class="user-status"></span>
                  </div>
                </div>
                <h5 class="font-size-16 mb-1 text-truncate"><a href="chat.html#"
                    class="text-dark">{{ $friendInfo->name }} {{ $friendInfo->last_name }}</a>
                </h5>



              </div>
              <div class="col-md-8 col-6">
                <ul class="list-inline user-chat-nav text-end mb-0">
                  <li class="list-inline-item">
                    <div class="dropdown">
                      <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-search"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                        <form class="p-2">
                          <div>
                            <input type="text" class="form-control rounded" placeholder="Search...">
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>


                  <li class="list-inline-item">
                    <div class="dropdown">
                      <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-ellipsis-h"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="chat.html#">Profile</a>
                        <a class="dropdown-item" href="chat.html#">Archive</a>
                        <a class="dropdown-item" href="chat.html#">Muted</a>
                        <a class="dropdown-item" href="chat.html#">Delete</a>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <div class="px-lg-2" style="height: calc(100vh - 150.44px);">
            <div class="chat-conversation p-3">
              <ul class="list-unstyled mb-0" data-simplebar style="height: calc(100vh - 165.44px);">
                <li class="chat-day-title">
                  <div class="title">Today</div>
                </li>
                <li>
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">John
                            Howard</a> <span class="d-inline-block font-size-12 text-muted ms-2">10:00</span></h5>
                        <p class="mb-0">
                          Good morning everyone !
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

                <li class="right">
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">Marcus</a>
                          <span class="d-inline-block font-size-12 text-muted ms-2">10:02</span>
                        </h5>
                        <p class="mb-0">
                          Good morning everyone !
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

                <li>
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">Galen
                            Rizo</a> <span class="d-inline-block font-size-12 text-muted ms-2">10:04</span></h5>
                        <p class="mb-0">
                          Hello!
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>

                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">Galen
                            Rizo</a> <span class="d-inline-block font-size-12 text-muted ms-2">10:04</span></h5>
                        <p class="mb-0">
                          What about our next meeting?
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

                <li>
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">John
                            Howard</a> <span class="d-inline-block font-size-12 text-muted ms-2">10:06</span></h5>
                        <p class="mb-0">
                          Next meeting tomorrow 10.00AM
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

                <li class="right">
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">Marcus</a>
                          <span class="d-inline-block font-size-12 text-muted ms-2">10:02</span>
                        </h5>
                        <p class="mb-0">
                          Wow that's great
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
                <li class="right">
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">Marcus</a>
                          <span class="d-inline-block font-size-12 text-muted ms-2">10:02</span>
                        </h5>
                        <p class="mb-0">
                          Wow that's great
                        </p>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

                <li>
                  <div class="conversation-list">
                    <div class="ctext-wrap">
                      <div class="ctext-wrap-content">
                        <h5 class="font-size-14 conversation-name"><a href="chat.html#" class="text-dark">John
                            Howard</a> <span class="d-inline-block font-size-12 text-muted ms-2">10:06</span></h5>
                        <p class="mb-0">
                          img-1.jpg & img-2.jpg images for a New Projects
                        </p>

                        <ul class="list-inline message-img mt-3  mb-0">
                          <li class="list-inline-item message-img-list">
                            <a class="d-inline-block m-1" href="chat.html">
                              <img src="/assets/images/small/img-1.jpg" alt="" class="rounded img-thumbnail">
                            </a>
                          </li>

                          <li class="list-inline-item message-img-list">
                            <a class="d-inline-block m-1" href="chat.html">
                              <img src="/assets/images/small/img-2.jpg" alt="" class="rounded img-thumbnail">
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="chat.html#" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="chat.html#">Copy</a>
                          <a class="dropdown-item" href="chat.html#">Save</a>
                          <a class="dropdown-item" href="chat.html#">Forward</a>
                          <a class="dropdown-item" href="chat.html#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>

              </ul>
            </div>
          </div>

          <div class="p-3 chat-input-section">
            <div class="row">
              <div class="col">
                <div class="position-relative">
                  <input type="text" class="form-control chat-input rounded" placeholder="Enter Message...">

                </div>
              </div>
              <div class="col-auto" style="padding-left: 0px;">
                

                <button class="btn btn-light btn-sm btn-file-upload waves-effect waves-light" style="margin-right: 6px;">
                  <div class="fa fa-paperclip "></div>
                </button>

                <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                    class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End d-lg-flex  -->

  </div>
@endsection
