<div>
{{--    This exists to override the non-branded content in app-theme-default--}}
    @php $thisYear=date('Y'); @endphp
    <p class="py-2 text-center text-xs text-80 ">
        <img class='w-8 mx-auto block' id='theBottomLogo' src='/img/logos/applogo.png'>

        <a href="http://www.tallandsassy.com" class="text-primary dim no-underline">{!! config('app-branding.AppName') !!}</a>
        <span class="px-1">&middot;</span>
        &copy; {{ date('Y') }} {!! config('app-branding.CompanyNameLong') !!}

        <br>
       {!! config('app-branding.Trademark') !!}
    </p>
</div>
