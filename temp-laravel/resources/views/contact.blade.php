<x-layout>
    {{-- para gumana yung headerTitle, dapat nasa loob siya ng x-layout since dun naman naka locate yung tatawagin na prog --}}
    {{-- then add ka na parang {{ $slot }} pero para matawag yung mismong headerTitle dapat --}}
    {{-- <x-slot:headerTitle></x-slot:headerTitle> wherein nag aact siya as {{$slot}} --}}
    {{-- specifically kay headerTitle --}}
    <x-slot:headerTitle>
        Contact
    </x-slot:headerTitle>
    <h1>This is contact page.</h1>
</x-layout>