<x-layout>
    <x-slot:heading>Gradering</x-slot:heading>    
    @foreach ($kids as $kid)
        <ul role="list" class="divide-y divide-gray-100">
            <li class="flex flex-col sm:flex-row justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $kid['name'] }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500 current-grade-{{ $kid['id'] }}">{{ $kid['grade'] }}</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Uppdaterad: {{ $kid['updated_at'] }}</p>
                    </div>
                </div>
                <form method="post" action="{{ route('updateBelt', ['id' => $kid['id']]) }}" class="w-full sm:w-auto">
                    @csrf
                    <div class="shrink-0 sm:flex sm:flex-col sm:items-end mt-4 sm:mt-0">
                        <select name="belt_grade" id="beltGradeForm-{{ $kid['id'] }}" class="w-full sm:w-auto mt-2" onchange="updateBelt({{ $kid['id'] }})">
                            <option value="Vit"          {{ $kid['grade'] == 'Vit'           ? 'selected' : '' }}>Vit</option>
                            <option value="Vit I"        {{ $kid['grade'] == 'Vit I'         ? 'selected' : '' }}>Vit I</option>
                            <option value="Vit II"       {{ $kid['grade'] == 'Vit II'        ? 'selected' : '' }}>Vit II</option>
                            <option value="Gråvit"       {{ $kid['grade'] == 'Gråvit'        ? 'selected' : '' }}>Gråvit</option>
                            <option value="Gråvit I"     {{ $kid['grade'] == 'Gråvit I'      ? 'selected' : '' }}>Gråvit I</option>
                            <option value="Gråvit II"    {{ $kid['grade'] == 'Gråvit II'     ? 'selected' : '' }}>Gråvit II</option>
                            <option value="Grå"          {{ $kid['grade'] == 'Grå'           ? 'selected' : '' }}>Grå</option>
                            <option value="Grå I"        {{ $kid['grade'] == 'Grå I'         ? 'selected' : '' }}>Grå I</option>
                            <option value="Grå II"       {{ $kid['grade'] == 'Grå II'        ? 'selected' : '' }}>Grå II</option>
                        </select>
                    </div>
                </form>
            </li>
        </ul>
        <hr>
    @endforeach
    <script src="{{ asset('public/js/beltUpdate.js') }}"></script>
</x-layout>
