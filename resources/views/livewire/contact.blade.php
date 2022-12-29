<div>


    @if (session()->has('success'))

            {!! session('success')  !!}

    @endif

    <form wire:submit.prevent="send" method="POST">

        <div class="mb-3">
            <label for="name" class="form-label">الإسم الكامل</label>
            <input type="text" id="name" wire:model="name" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">رقم الهاتف</label>
            <input type="tel" wire:model="phone" id="phone" class="form-control">
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="email"  wire:model="email"   id="email" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">عنوان الرسالة</label>
            <input type="text" id="subject" wire:model="subject" class="form-control">
            @error('subject')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">الرسالة</label>
            <textarea id="message" wire:model="message" class="form-control"></textarea>
            @error('message')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <button class="btn btn-primary w-100 mt-3">إرسال</button>



    </form>

</div>
