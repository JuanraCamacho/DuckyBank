<x-guest-layout >
    <div class="md:container md:mx-auto box-border h-100 w-32 p-4 border-4 static">
        
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                
                <div class="col-span-2 border-4">2</div>
                <div class="row-span-2 col-span-2 border-4">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('turnos') }}">
                    @csrf
                            <div class="mt-2">
    
                                <div class="group border-indigo-500 hover:bg-white mt-4">
                                    <x-jet-label for="operation" value="{{ __('Nombre Cliente') }}" placeholder="Nombre del cliente" />	
                                    <input id="Nombre" name="Nombre" type="text" class="text-indigo-500 " required autofocus ></input>
                                </div>
    
                                <div class="mt-4">
                                <x-jet-label for="operation" value="{{ __('Operación') }}" />
                                <select id="operation" name="operation" class="block mt-1 w-full appearance-none">
                                @foreach ($operations as $item)
                                    <option value="{{$item->id}}">{{$item ->operation}}</option>
                                @endforeach
                                </select>
                                </div>
    
                                <div class="group border-indigo-500 hover:bg-white mt-4">
                                    <p class="text-indigo-600  ...">Siguiente Turno</p>
                                    <input id="folio" name="folio" type="text" class="text-indigo-500 " value="{{$folio[0]->Folio}}"  readonly="readonly"></input>
                                </div>
                                                        
                                <div class="mt-10">
                                <button class="w-full uppercase px-8 py-2 border border-blue-600 text-blue-600 shadow-sm hover:shadow-lg">Tomar turno
                                </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </div>
    </x-guest-layout>