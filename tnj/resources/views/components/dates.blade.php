{{-- 
    This component will look for dates recorded 
    in the database to support a job hunt journey

    THIS IS NOT CURRENTLY FINISHED

    TO DO: 

    - An array built from separate date fields in the database
    - A ForEach loop to present each date of interest as needed

    'awareness_date' 
    'applied_date'
    'telephone_interview_date'
    'first_onsite_interview_date'
    'offer_received_date'
    'offer_accepted_date'
    --}}
    
@props(['item'])

@php
    $dates = [];
    if (item['awareness_date' != '']) {
        $dates = array_merge($dates, array("Aware:"=>"awareness_date")); 
        // this will break from loop is positive...
        // need to rethink this, possibly a reverse logic
        // starting from if NOT closed then ... for example
        // CURRENTLY ABANDONED
    }
    elseif (item['applied_date']) {
        $dates = array_merge($dates, array("Aware:"=>"awareness_date", "Applied:"=>"awareness_date"));
    }
@endphp

