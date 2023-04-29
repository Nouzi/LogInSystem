<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center w-full">
                <div class="flex-shrink-0">
                    {{--TODO pridať komponent na logo--}}
                    {{--Logo--}}
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block w-full">
                    <div class="ml-10 flex items-baseline space-x-4">
                        {{--TODO pridať komponent na link--}}
                        @can('admin')
                            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Admin Panel</a>
                        @endcan
                        {{--Ukáže členov týmu--}}
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Tím</a>
                        {{--Ukáže Projekty na ktorých pracuje--}}
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projekty</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kalendár</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Záznamy</a>
                        <div class="w-full flex justify-end">
                            <form class="text-white" action="/logout" method="POST">
                                @csrf
                                <input type="submit" value="Odhlásiť sa"/>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>





