{{--Roadmap:--}}
{{--Have some context here. Basically, if teams are our only tenent, then our team is our subsite.  --}}
{{--But, if we have tenancy, like a school or club name, then we'll want some different logic--}}
{{--We'll add the extra subsite logic (somewhere) when we get to that point--}}
@if(Auth::user())
    <span class="truncate">{{ Auth::user()->currentTeam->name }}</span>
@else
    Tenant
@endif
