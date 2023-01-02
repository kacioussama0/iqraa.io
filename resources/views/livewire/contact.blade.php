<div>


    @if (session()->has('success'))

            {!! session('success')  !!}

    @endif

    <form wire:submit.prevent="send" method="POST">

        <div class="mb-3 form-floating text-primary">
            <input type="text" id="name" wire:model="name" class="form-control " >
            <label for="floatingInput" class="form-label">{{__('contact.nom-prenom')}}</label>
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3 form-floating text-primary">
            <input type="tel" wire:model="phone" id="phone" class="form-control ">
            <label for="floatingInput" class="form-label">{{__('contact.telephone')}}</label>
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3 form-floating text-primary">
            <input type="email"  wire:model="email"   id="email" class="form-control">
            <label for="form-floating text-primary" class="form-label">{{__('contact.email')}}</label>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3 form-floating text-primary">
            <input type="text" id="subject" wire:model="subject" class="form-control">
            <label for="floatingInput" class="form-label">{{__('contact.objet')}}</label>
            @error('subject')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3 form-floating text-primary">
            <textarea id="message" wire:model="message" class="form-control" style="height: 100px"></textarea>
            <label for="floatingTextarea2" >{{__('contact.message')}}</label>
            @error('message')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <button class="btn btn-primary w-100 mt-3 text-light "> <i class="fa-solid fa-paper-plane mx-1"></i> {{__('contact.envoyer')}}</button>



    </form>

</div>
