<x-layout>
    <x-slot:heading>Knattar</x-slot:heading>
    <div class="ml-10 flex justify-center items-baseline space-x-4">
        <strong>
            <p>Välj grupp:</p>
        </strong>
        <x-nav-link href="/kids-gradings" :active="request()->is('kids-gradings')">Barn</x-nav-link>
        <x-nav-link href="/peewees-gradings" :active="request()->is('peewees-gradings')">Knattar</x-nav-link>
        <x-nav-link href="/adults-gradings" :active="request()->is('adults-gradings')">Vuxna</x-nav-link>
    </div>
</x-layout>
