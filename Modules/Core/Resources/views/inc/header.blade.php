@isset($header_title)
    <div class="w-full h-screen py-2 bg-cover bg-center bg-fixed bg-blend-multiply" style="background-image: url('{{ isset($header_bg_img) && $header_bg_img != '' ? asset('storage/images/jpg/'.$header_bg_img) : '' }}');">
        <div class="w-full h-full flex {{ isset($header_class)&&$header_class!=''?$header_class:' items-center' }} ">
            <div class="max-w-4xl px-8 flex flex-col drop-shadow-lg leading-loose">
                <h1 class="text-3xl md:text-6xl font-black {{ isset($header_title_class) && $header_title_class != '' ? $header_title_class : 'text-blue-800' }}">{{  $header_title  }}</h1>
                @if(isset($header_sub_title)&&$header_sub_title!='')
                    <h2 class="text-lg md:text-4xl mt-8 font-bold {{ isset($header_sub_title_class) && $header_sub_title_class != '' ? $header_sub_title_class : 'text-blue-800' }}">{{ isset($header_sub_title)&&$header_sub_title!=''?$header_sub_title:'' }}</h2>
                    @if(isset($header_foot_note)&&$header_foot_note!='')
                        <h3 class="text-sm md:text-xl font-bold mt-4 {{ isset($header_foot_note_class) && $header_foot_note_class != '' ? $header_foot_note_class : 'text-blue-800' }}">{{ isset($header_foot_note)&&$header_foot_note!=''?$header_foot_note:'' }}</h3>
                    @endif
                @endif

                @if(isset($header_url)&&$header_url!='')
                    <div class="flex">
                        <a href="{{ isset($header_url)&&$header_url!=''?$header_url:'#' }}"
                       class="{{ isset($header_anchor_class) && $header_anchor_class != '' ? $header_anchor_class : 'inline-block bg-blue-800 py-3 px-5 text-base rounded shadow-lg hover:bg-blue-700 text-blue-100' }}">
                       {{ isset($header_anchor_text) && $header_anchor_text != ''? $header_anchor_text : '' }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endisset

{{-- {{ isset($header_bg)&&$header_bg!=''?$header_bg:'bg-blue-800 ' }}" --}}