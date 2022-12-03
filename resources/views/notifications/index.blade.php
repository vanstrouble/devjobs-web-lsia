<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificacioens') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-4xl font-bold text-center my-10">Mis notificaciones</h1>

                    <div class="divide-y divide-gray-200">
                        @forelse ($notifications as $notification)
                            <div class=" p-5 lg:flex lg:justify-between lg:items-center">
                                <div>
                                    <p>Tienes un nuevo candidato en:
                                        <span class=" font-bold">{{ $notification->data['vacancy_name'] }}</span>
                                    </p>
                                    <p>
                                        <span class=" font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                                <div class="mt-5 lg:mt-0">
                                    <a href="{{ route('candidates.index', $notification->data['vacancy_id']) }}" class=" bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg">
                                        Ver candidatos
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class=" text-center text-gray-600">No hay notificaciones nuevas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
