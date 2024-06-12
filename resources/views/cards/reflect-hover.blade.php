@pushOnce('styles')
    <style>
        .webkit-box-reflect {
            -webkit-box-reflect: below 2px linear-gradient(transparent, transparent, #0004);
        }
    </style>
@endPushOnce

<div class="flex h-[600px] items-center justify-center bg-black">
    <div class="group container flex max-h-[350px] max-w-[600px] items-center justify-center gap-5">
        <img class="webkit-box-reflect h-full w-[30%] origin-center object-cover opacity-100 transition duration-500 [transform:perspective(800px)_rotateY(25deg)] group-hover:opacity-30 group-hover:hover:opacity-100 group-hover:hover:[transform:perspective(800px)_rotateY(0deg)]" src="{{ asset('images/cards/good-evil.png') }}" alt="">
        <img class="webkit-box-reflect h-full w-[30%] origin-center object-cover opacity-100 transition duration-500 [transform:perspective(800px)_rotateY(25deg)] group-hover:opacity-30 group-hover:hover:opacity-100 group-hover:hover:[transform:perspective(800px)_rotateY(0deg)]" src="{{ asset('images/cards/flower.png') }}" alt="">
        <img class="webkit-box-reflect h-full w-[30%] origin-center object-cover opacity-100 transition duration-500 [transform:perspective(800px)_rotateY(25deg)] group-hover:opacity-30 group-hover:hover:opacity-100 group-hover:hover:[transform:perspective(800px)_rotateY(0deg)]" src="{{ asset('images/cards/model.png') }}" alt="">
    </div>
</div>
