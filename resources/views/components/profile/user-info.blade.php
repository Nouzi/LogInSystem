@props(['heading', 'user'])
<div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
    <dt class="text-sm font-bold leading-6 text-gray-900">{{$heading}}</dt>
    <dd class=" text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$user}}</dd>
</div>
