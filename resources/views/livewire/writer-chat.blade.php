<div>
    <style>
        .modal-content {
            z-index: 10;

        }

        .modal-backdrop {
            z-index: 2;
        }
    </style>

    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('icons8-chat-100.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                WRITER
            </a>
            <div class="d-flex justify-content-center align-items-center ">
                @guest
                <button class="btn " type="button" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                    <span>

                        Create Account
                    </span>
                </button>

                <button class="btn " type="button" data-bs-toggle="modal" data-bs-target="#SignIn">
                    <span>

                        Sign In

                    </span>
                </button>
                @endguest



                <!-- Modal -->
                <div wire:ignore class="modal fade" id="CreateAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form wire:submit.prevent="register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" wire:model='authForm.name' class="form-control @error('name') is-invalid  @enderror" id="exampleFormControlInput1" placeholder="name">
                                        @error('authForm.name')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" wire:model="authForm.email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        @error('authForm.email')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" wire:model="authForm.password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                        @error('authForm.password')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                                        <input type="password" wire:model="authForm.password_confirmation" class="form-control" id="exampleFormControlInput1" placeholder="comfirm password">

                                        @error('authForm.password_confirmation')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create Account</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                @auth
                <button class="btn " type="button" data-bs-toggle="modal" data-bs-target="#CreateAccount">
                    <span>

                        {{ ucfirst(auth()->user()->email) }}
                    </span>
                </button>

                <button wire:click="logout" class="btn " type="button">
                    <span>
                        <i class="fa-solid fa-right-to-bracket mr-2"></i>
                        Logout

                    </span>
                </button>

                @endauth


                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="SignIn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form wire:submit.prevent="signin">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" wire:model="authForm.email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" wire:model="authForm.password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                @auth
                <button class="btn " type="button" data-bs-toggle="modal" data-bs-target="#Setting">
                    <span>
                        <i class="fa-solid fa-sliders text-sm mr-2"></i>
                        settings

                    </span>
                </button>
                @endauth



                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="Setting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form wire:submit.prevent>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Adjust Tone / Keyword Density</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Min Keyword Density</label>
                                                <input wire:model.blur="toneAdjustmentForm.min_kw_density" type="number" step="0.01" max="1" min="0" class="form-control" id="exampleFormControlInput1" placeholder="minimum">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for=" exampleFormControlInput1" class="form-label">Max Keyword Density</label>
                                                <input wire:model.blur="toneAdjustmentForm.max_kw_density" type="number" step="0.01" max="1" min="0" class="form-control" id="exampleFormControlInput1" placeholder="maximum">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for=" exampleFormControlInput1" class="form-label">Tone</label>
                                            <select wire:model.blur="toneAdjustmentForm.tone" class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                @foreach ($tones as $tone)
                                                <option value="{{$tone}}">{{ ucfirst($tone) }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!-- <button type="submit" class="btn btn-primary">Change Setting</button> -->
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </div>
    </nav>

    <div class="container " style="height:87vh; overflow-y: scroll; background-color:bisque;">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @forelse ($chats as $chat )
        <div class="card">
            <div class="card-header">

                {{ $chat->prompt }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $chat->response }}</p>
                <img src="" alt="">
                <div class="d-flex justify-content-center align-items-center flex-wrap" style="gap:3rem;">
                    <img height="250px" width="250px" src="{{$chat->media_urls[0]}}" class="rounded " alt="...">
                    <img height="250px" width="250px" src="{{$chat->media_urls[1]}}" class="rounded " alt="...">
                </div>
            </div>
        </div>
        @empty
        <div class="d-flex justify-content-center align-items-center" style="height:87vh; ">
            <p>
            <h3>
                Enjoy a wonderful exprience with the power of write helper.
            </h3>
            </p>
        </div>
        @endforelse

    </div>
    <div class="container py-2" style="height: 5vh;">

        <form wire:submit.prevent="sentPrompt">
            <div class="input-group mb-3">
                <input type="text" class="form-control" wire:model='promptForm.prompt' placeholder="Enter Prompt" aria-label="Username">
                <button type="submit" class="input-group-text"><i class="fa-regular fa-paper-plane mr-2" style="color: #296adb;"></i>&nbsp;&nbsp; Enter</button>

            </div>
        </form>
    </div>



</div>