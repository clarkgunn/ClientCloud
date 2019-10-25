<template>
  <layout>
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
<!--          @if (session('resent'))-->
          <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4" role="alert">
            'A fresh verification link has been sent to your email address.'
          </div>

          <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
              'Verify Your Email Address'
            </div>

            <div class="w-full flex flex-wrap p-6">
              <p class="leading-normal">
                'Before proceeding, please check your email for a verification link.'
              </p>

              <p class="leading-normal mt-6">
                'If you did not receive the email', <a class="text-blue-500 hover:text-blue-700 no-underline" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
              </p>

              <form id="resend-verification-form" method="POST" action="verification/resend" class="hidden">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from '../Shared/Layout'

export default {
  components: {
    Layout,
  },
}
</script>

