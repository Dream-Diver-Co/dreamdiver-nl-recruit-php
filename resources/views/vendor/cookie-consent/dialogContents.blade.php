<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="cookie-text-container"
                style="display: flex; align-items: center; justify-content: center; height: 100%;">
                <!-- Use flex to align items both horizontally and vertically -->
                <p class="ml-3 text-black cookie-consent__message">
                    {!! trans('cookie-consent::texts.message') !!}
                    <span class="cookie-text-detail"><a href="{{ route('cookie') }}">Click for detail. </a></span>
                </p>

                <button
                    class="js-cookie-consent-agree cookie-consent__agree cursor-pointer px-4 py-1 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                    {{ trans('cookie-consent::texts.agree') }}
                </button>
            </div>
        </div>
    </div>
</div>
