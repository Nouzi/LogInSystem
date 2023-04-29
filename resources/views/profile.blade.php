@props(['user'])
<x-layout>

<div class="min-h-full">
    <x-navigation />

<x-profile.banner title="Profil Užívateľa"/>

    <main class="mx-auto w-1/2 ">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="mt-6 border-t border-gray-100 ">
                <dl class="divide-y divide-gray-100">
                    <x-profile.user-info heading="Meno" :user="$user->name" />
                    <x-profile.user-info heading="Email" :user="$user->email" />
                    <x-profile.user-info heading="Registrovaný" :user="$user->created_at->diffForHumans()" />
                </dl>
            </div>

        </div>
    </main>
</div>

</x-layout>

