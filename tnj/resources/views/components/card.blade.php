{{-- 
    This component is a catch-all component for the styling used in places like
    register
    login
    etc
    --}}

<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>