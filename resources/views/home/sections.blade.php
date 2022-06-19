<div id="sectionsContainer" class="row container">
    <a href="{{ route('accounts') }}" class="col-md-4">
        <div id="accountsSection" class="section">
            <div class="material-icons section-logo" id="accountsLogo">group</div>
            <div>{{ __('home.accounts') }}</div>
        </div>
    </a>
    <a href="{{ route('items') }}" class="col-md-4">
        <div id="itemsSections" class="section">
            <div class="material-icons section-logo" id="itemsLogo">home_repair_service</div>
            <div>{{ __('home.items') }}</div>
        </div>
    </a>
    <a href="{{ route('gameCoins') }}" class="col-md-4">
        <div id="gameCoinsSection" class="section">
            <div class="material-icons section-logo" id="gameCoinsLogo">monetization_on</div>
            <div>{{ __('home.gameCoins') }}</div>
        </div>
    </a>
</div>
