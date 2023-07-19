<header>
<div class='container mg-auto'>     
        <header class="flex">
            <div class='brand'>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC-LOGO">
            </div>
            <ul class='d-flex'>
            @foreach($headerList as $elementList)
                    <li>
                        <a href="#">
                            {{$elementList['text']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
        </header>
    </div>
</header>