<x-layout>
    <x-slot:heading>Gradering</x-slot:heading>
    @foreach ($kids as $kid)
        <ul role="list" class="divide-y divide-gray-100">
            <li class="flex flex-col sm:flex-row justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $kid['name'] }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $kid['grade'] }}</p>
                    </div>
                </div>
                <form method="post" action="{{ route('updateBelt', ['id' => $kid['id']]) }}" class="w-full sm:w-auto">
                    @csrf
                    <div class="shrink-0 sm:flex sm:flex-col sm:items-end mt-4 sm:mt-0">
                        <p class="text-sm leading-6 text-gray-900">Välj bälte:</p>
                        <select name="belt_grade" id="beltGradeForm" class="w-full sm:w-auto mt-2" onchange="this.form.submit()">
                            <option value="Vitbälte"     {{ $kid['grade'] == 'Vitbälte'      ? 'selected' : '' }}>Vitbälte</option>
                            <option value="Vitbälte I"   {{ $kid['grade'] == 'Vitbälte I'    ? 'selected' : '' }}>Vitbälte I</option>
                            <option value="Vitbälte II"  {{ $kid['grade'] == 'Vitbälte II'   ? 'selected' : '' }}>Vitbälte II</option>
                            <option value="Gråvit"       {{ $kid['grade'] == 'Gråvit'        ? 'selected' : '' }}>Gråvit</option>
                            <option value="Gråvit I"     {{ $kid['grade'] == 'Gråvit I'      ? 'selected' : '' }}>Gråvit I</option>
                            <option value="Gråvit II"    {{ $kid['grade'] == 'Gråvit II'     ? 'selected' : '' }}>Gråvit II</option>
                            <option value="Grå"          {{ $kid['grade'] == 'Grå'           ? 'selected' : '' }}>Grå</option>
                            <option value="Grå I"        {{ $kid['grade'] == 'Grå I'         ? 'selected' : '' }}>Grå I</option>
                            <option value="Grå II"       {{ $kid['grade'] == 'Grå II'        ? 'selected' : '' }}>Grå II</option>
                        </select>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Skapad: {{ $kid['created_at'] }}</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Uppdaterad: {{ $kid['updated_at'] }}</p>
                    </div>
                </form>
            </li>
        </ul>
    @endforeach
</x-layout>
