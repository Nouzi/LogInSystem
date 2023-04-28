@props(['$user'])
<x-partials.header />
<body class="h-full">
<h1>Your name : {{auth()->user()->name}}</h1>
<h1>Your email : {{auth()->user()->email}}</h1>
<h1>Your password : {{auth()->user()->password}}</h1>
<a href="/">Go back</a>
</body>
<x-partials.footer />

