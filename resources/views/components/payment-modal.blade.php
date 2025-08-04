<div x-data="{
    show: false,
    activeTab: 'credit-card',
    tabs: [
        { id: 'credit-card', name: 'Credit Card', icon: 'fa-credit-card' },
        { id: 'mobile-money', name: 'Mobile Money', icon: 'fa-mobile-alt' },
        { id: 'paypal', name: 'PayPal', icon: 'fa-paypal' }
    ],
    openTab(tabId) {
        this.activeTab = tabId;
    }
}"
x-show="show"
x-on:open-payment-modal.window="show = true"
x-on:keydown.escape.window="show = false"
class="fixed inset-0 z-[100] overflow-y-auto"
aria-labelledby="modal-title" role="dialog" aria-modal="true"
x-cloak>
    {{-- Overlay --}}
    <div x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-75 transition-opacity" x-on:click="show = false"></div>

    {{-- Modal Panel --}}
    <div x-show="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white dark:bg-dark-surface text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white dark:bg-dark-surface px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                            <h3 class="text-2xl font-semibold leading-6 text-primary dark:text-dark-text mb-6" id="modal-title">Choose Payment Method</h3>

                            {{-- Tab Navigation --}}
                            <div class="border-b border-gray-200 dark:border-gray-700 mb-6">
                                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                    <template x-for="tab in tabs" :key="tab.id">
                                        <button x-on:click="openTab(tab.id)"
                                            :class="activeTab === tab.id ? 'border-accent text-accent' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-600'"
                                            class="group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm transition-colors duration-200 focus:outline-none">
                                            <i :class="tab.icon" class="mr-2 text-lg"></i>
                                            <span x-text="tab.name"></span>
                                        </button>
                                    </template>
                                </nav>
                            </div>

                            {{-- Tab Content --}}
                            <div class="mt-2">
                                {{-- Credit Card Tab --}}
                                <div x-show="activeTab === 'credit-card'">
                                    <form class="space-y-6">
                                        {{-- Card Number --}}
                                        <div class="relative z-0 w-full group">
                                            <input type="text" name="card_number" id="card_number"
                                                class="block py-2.5 px-0 w-full text-base text-primary dark:text-dark-text bg-transparent border-0 border-b-2 border-muted dark:border-dark-muted appearance-none focus:outline-none focus:ring-0 focus:border-accent peer"
                                                placeholder=" " required
                                                x-on:input="this.value=this.value.replace(/\D/g,'').replace(/(\d{4})(?=\d)/g,'$1 ').trim()"
                                                maxlength="19"> {{-- 16 digits + 3 spaces --}}
                                            <label for="card_number" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Card Number</label>
                                            <div class="absolute right-0 top-3 text-gray-400 dark:text-gray-500">
                                                <i class="fas fa-lock mr-2"></i>
                                                <i class="fab fa-cc-visa text-lg"></i> <i class="fab fa-cc-mastercard text-lg"></i> {{-- Placeholder icons --}}
                                            </div>
                                        </div>

                                        {{-- Card Holder Name --}}
                                        <div class="relative z-0 w-full group">
                                            <input type="text" name="card_holder" id="card_holder"
                                                class="block py-2.5 px-0 w-full text-base text-primary dark:text-dark-text bg-transparent border-0 border-b-2 border-muted dark:border-dark-muted appearance-none focus:outline-none focus:ring-0 focus:border-accent peer"
                                                placeholder=" " required>
                                            <label for="card_holder" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Card Holder Name</label>
                                        </div>

                                        <div class="grid grid-cols-2 gap-6">
                                            {{-- Expiry Date --}}
                                            <div class="relative z-0 w-full group">
                                                <input type="text" name="expiry_date" id="expiry_date"
                                                    class="block py-2.5 px-0 w-full text-base text-primary dark:text-dark-text bg-transparent border-0 border-b-2 border-muted dark:border-dark-muted appearance-none focus:outline-none focus:ring-0 focus:border-accent peer"
                                                    placeholder=" " required
                                                    x-on:input="this.value=this.value.replace(/\D/g,'').replace(/^(\d\d)(\d)/g,'$1/$2').replace(/(\/\d\d)\d+/g,'$1').trim()"
                                                    maxlength="5"> {{-- MM/YY --}}
                                                <label for="expiry_date" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expiry (MM/YY)</label>
                                            </div>

                                            {{-- CVC --}}
                                            <div class="relative z-0 w-full group">
                                                <input type="text" name="cvc" id="cvc"
                                                    class="block py-2.5 px-0 w-full text-base text-primary dark:text-dark-text bg-transparent border-0 border-b-2 border-muted dark:border-dark-muted appearance-none focus:outline-none focus:ring-0 focus:border-accent peer"
                                                    placeholder=" " required
                                                    x-on:input="this.value=this.value.replace(/\D/g,'').trim()"
                                                    maxlength="4">
                                                <label for="cvc" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CVC</label>
                                                <i class="fas fa-question-circle absolute right-0 top-3 text-gray-400 dark:text-gray-500 cursor-pointer" title="3 or 4 digit security code on the back of your card"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                {{-- Mobile Money Tab --}}
                                <div x-show="activeTab === 'mobile-money'">
                                    <form class="space-y-6">
                                        <div class="relative z-0 w-full group">
                                            <input type="tel" name="mobile_number" id="mobile_number"
                                                class="block py-2.5 px-0 w-full text-base text-primary dark:text-dark-text bg-transparent border-0 border-b-2 border-muted dark:border-dark-muted appearance-none focus:outline-none focus:ring-0 focus:border-accent peer"
                                                placeholder=" " required
                                                x-on:input="this.value=this.value.replace(/\D/g,'').trim()">
                                            <label for="mobile_number" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mobile Money Number</label>
                                        </div>
                                        <div class="relative z-0 w-full group">
                                            <label for="mobile_operator" class="block text-base text-gray-500 dark:text-gray-400 mb-1">Select Operator</label>
                                            <select id="mobile_operator" class="block w-full p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface focus:outline-none focus:ring-2 focus:ring-accent">
                                                <option value="">-- Select --</option>
                                                <option value="mtn">MTN</option>
                                                <option value="airtel">Airtel</option>
                                                <option value="vodafone">Vodafone</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>

                                {{-- PayPal Tab --}}
                                <div x-show="activeTab === 'paypal'">
                                    <div class="text-center py-8">
                                        <i class="fab fa-paypal text-blue-600 text-6xl mb-4"></i>
                                        <p class="text-lg text-gray-700 dark:text-gray-300">You will be redirected to PayPal to complete your purchase securely.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-dark-background px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <x-button type="submit" class="inline-flex w-full justify-center rounded-md bg-accent px-6 py-3 text-lg font-semibold text-primary shadow-sm hover:bg-yellow-600 sm:ml-3 sm:w-auto transition-colors duration-200">
                        Pay Now
                    </x-button>
                    <x-button type="button" x-on:click="show = false" class="mt-3 inline-flex w-full justify-center rounded-md bg-white dark:bg-dark-muted px-6 py-3 text-lg font-semibold text-primary dark:text-dark-text shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 sm:mt-0 sm:w-auto transition-colors duration-200">
                        Cancel
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>