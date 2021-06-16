<div>
<div class="flex flex-wrap justify-end my-2">
<button onClick="toggleElement('create')" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase transition bg-white border-yellow-400 rounded-lg hover:bg-gray-300 hover:border-gray-500 shadow-md">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
</svg>
Add Student
</button>
</div>
<div class="flex flex-col pt-4">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name of Student
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Program
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Student Number
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Delete</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_url}}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{$user->name}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">
                      {{$user->email}}
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-sm leading-5 text-gray-500">
                  {{$user->program}}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$user->student}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button onClick="toggleElement('show{{$user->id}}')" class="text-indigo-600 hover:text-indigo-900">Edit</button>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form method="post" action="{{route('users.destroy', $user->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                </form>
              </td>
            </tr>
            <div id="show{{$user->id}}" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-6 space-x-10 sm:flex sm:items-start">
                        <button onclick="toggleElement('show{{$user->id}}')"
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-center">
                        <h2 class="text-xl font-bold text-gray-500">Add Student</h2>
                    </div>
                    <div>
                    <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('users.update' , $user->id) }}">
            @csrf
            @method('patch')
            <div class="border-4 border-yellow-400 mt-4 w-full rounded-lg p-6">
            <div class="py-2 text-center">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>

            <div class=" py-2 text-center">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="email" name="email" value="{{$user->email}}" required />
            </div>

            <div class="py-2 text-center">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="password" name="password"  />
            </div>
            <div class="py-2 text-center">
                <x-jet-label for="program" value="{{ __('Program') }}" />
                <x-jet-input id="program" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="text" name="Program" value="{{$user->program}}"  required/>
            </div>
            <div class="py-2 text-center">
                <x-jet-label for="student" value="{{ __('Student') }}" />
                <x-jet-input id="student" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="number" name="student" value="{{$user->student}}" min="10"  required/>
            </div>
            


          
                <x-jet-button class="mt-4">
                    {{ __('UPDATE') }}
                </x-jet-button>
            </div>
         </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div id="create" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-6 space-x-10 sm:flex sm:items-start">
                        <button onclick="toggleElement('create')"
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-center">
                        <h2 class="text-xl font-bold text-gray-500">Add Student</h2>
                    </div>
                    <div>
                    <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="border-4 border-yellow-500 mt-4 w-full rounded-lg p-6">
            <div class="py-2 text-center">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="text" name="name" required autofocus autocomplete="name" />
            </div>

            <div class=" py-2 text-center">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="email" name="email" required />
            </div>

            <div class="py-2 text-center">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="py-2 text-center">
                <x-jet-label for="program" value="{{ __('Program') }}" />
                <x-jet-input id="program" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="text" name="program"  required/>
            </div>
            <div class="py-2 text-center">
                <x-jet-label for="student" value="{{ __('Student') }}" />
                <x-jet-input id="student" class="w-full border-yellow-400 appearance-none border-2 p-2 rounded-xl" type="number" name="student" min="10"  required/>
            </div>
            


          
                <x-jet-button class="mt-4">
                    {{ __('ADD') }}
                </x-jet-button>
            </div>
         </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
