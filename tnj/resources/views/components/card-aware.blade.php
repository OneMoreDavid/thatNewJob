@props(['item'])

<div {{$attributes->merge(['class' => 'bg-colFour border border-gray-200 rounded p-6'])}}>
    <x-card-content :item="$item"/>
</div>