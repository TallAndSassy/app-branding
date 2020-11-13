@if(Auth::user())
    <span class="truncate">{{ Auth::user()->currentTeam->name }}</span>
@else
    Tenant
@endif
