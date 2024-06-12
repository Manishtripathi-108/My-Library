@pushOnce('styles')
    <style>

        

        .active {
            box-shadow: inset -3px -3px 7px #ffffff73, inset 3px 3px 5px rgba(94, 104, 121, 0.288) !important;
        }

        .active a {
            font-size: 17px !important;
            color: #6f6cde !important;
        }
    </style>
@endPushOnce

<div class="grid place-items-center text-center">
    <div class="rounded-[3px] bg-[#dde1e7] p-6 shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
        <ul class="flex list-none">
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73] first:mr-4 last:ml-4">
                <a class="block h-[45px] w-[120px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">Previous</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">1</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">2</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">3</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">4</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">5</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">6</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">7</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73]">
                <a class="block h-[45px] w-[55px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">8</a>
            </li>
            <li class="mx-1 flex-1 rounded-[3px] bg-[#dde1e7] shadow-[3px_3px_5px_rgba(94,104,121,0.288),-3px_-3px_7px_#ffffff73] first:mr-4 last:ml-4">
                <a class="block h-[45px] w-[100px] text-lg leading-[45px] text-[#4d3252] no-underline" href="#">Next</a>
            </li>
        </ul>
    </div>
</div>

@pushOnce('scripts')
    <script>
        document.querySelectorAll('li').forEach(function(item) {
            item.addEventListener('click', function() {
                document.querySelectorAll('li').forEach(function(li) {
                    li.classList.remove('active');
                });
                item.classList.add('active');
            });
        });
    </script>
@endPushOnce
