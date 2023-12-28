<div>


    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('icons8-chat-100.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                WRITER
            </a>
            <div class="d-flex justify-content-center align-items-center ">
                <button class="btn " type="button">
                    <span>
                        <i class="fa-solid fa-sliders text-sm mr-2"></i>
                        settings

                    </span>
                </button>
                
                

            </div>

        </div>
    </nav>

    <div class="container " style="height:87vh; overflow-y: scroll; background-color:bisque;">
        <div class="d-flex justify-content-center align-items-center" style="height:87vh; ">
            <p>
            <h3>
                Enjoy a wonderful exprience with the power of write helper.
            </h3>
            </p>
        </div>
    </div>
    <div class="container py-2" style="height: 5vh;">

        <form wire:submit.prevent="sentPrompt">
            <div class="input-group mb-3">
                <input type="text" class="form-control" wire:model='prompt' placeholder="Enter Prompt" aria-label="Username">
                <button type="submit" class="input-group-text"><i class="fa-regular fa-paper-plane mr-2" style="color: #296adb;"></i>&nbsp;&nbsp; Enter</button>

            </div>
        </form>
    </div>



</div>