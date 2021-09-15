<section
    x-data='distributor()'
    x-init="init()"
    class="section-custom distributor antialiased"
>
    <div class="sec-heading text-center max-w-3xl mx-auto px-4 sm:px-6 mb-4">
        <h2 class="text-xl md:text-2xl font-bold">Hệ thống phân phối</h2>
        <p class="text-gray-600">Hệ thống phân phối là con đường vận động của hàng hóa và dịch vụ từ nơi sản xuất đến
            nới tiêu dùng. Xem ngay các nhà phân phối của chúng tôi.</p>
    </div>
    <div class="container-custom grid grid-cols-1 lg:grid-cols-5 gap-0 lg:gap-2">
        <div
            id="distributionInfo"
            class="col-start-2 col-span-3 mt-8"
        >
            <div class="mb-4">
                <span class="hidden md:inline-block">Chọn tỉnh/thành phố:</span>
                <select
                    x-on:input.debounce="getDistributor()"
                    x-model="selected"
                    name="distributor-select"
                    id="distributor-select"
                    class="p-2 md:ml-2 rounded-md outline-none border"
                >
                    @foreach(get_distributor_location() as $countryCode => $countryName)
                        <option value="{{ $countryCode }}" x-bind:selected="selected == '{{ $countryCode }}'"
                                text="{{ $countryName }}">{{ $countryName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="border-t-4 border-blue-500 pt-2">
{{--                <div class="mb-7 section-row-title">--}}
{{--                    <div class="col-sm-6 col-12">--}}
{{--                        <h2--}}
{{--                            id="update-title"--}}
{{--                            class="uppercase font-bold inline-block text-xl"--}}
{{--                            x-text="nameDistributor">--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <ul
                    id="update-area"
                    class="distribution-list"
                    style="max-height:600px;overflow-x:auto;"
                >
                    <div id="loading-distri" class="text-center p-6" style="display: none">
                        <x-theme::icons.loading class="animate-spin -ml-1 mr-3 text-blue-500"/>
                    </div>
                    <div
                        id="distributorItem"
                        class="pr-3"
                    >
                    </div>
                    <template id="distributorItemHtml">
                        <li class="py-4 border-b">
                            <h5 class="distributor-item-text text-blue-700 text-lg">
                            </h5>
                            <div class="flex flex-wrap text-base font-medium text-gray-500">
                                <div class="distributor-item-text w-full md:w-3/4">
                                </div>
                                <div class="distributor-item-text w-full md:w-1/4 md:text-right">
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function distributor() {
            return {
                selected: "hanoi",
                // nameDistributor: 'Ha Noi',
                distributor: @json(get_distributor('hanoi')),
                init() {
                    this.getDistributor();
                },
                addValueDistributorItem(res) {
                    if (res.length) {
                        for (let i = 0; i < res.length; i++) {
                            if ('content' in document.createElement('template')) {
                                var tbody = document.querySelector("#distributorItem");
                                var template = document.querySelector('#distributorItemHtml');

                                var clone = template.content.cloneNode(true);

                                var name = clone.querySelectorAll(".distributor-item-text");
                                name[0].textContent = res[i].name
                                name[1].textContent = res[i].address
                                name[2].textContent = res[i].phone

                                tbody.appendChild(clone);

                            }
                        }
                    }
                },
                getDistributor() {
                    $("#distributorItem").empty();

                    this.distributor = [];
                    $('#loading-distri').show();
                    // this.nameDistributor = $('#distributor-select').find('option:selected').text();
                    axios.get('{!! route(ROUTE_LIST_DISTRIBUTOR_NAME) !!}', {
                        params: {
                            location: this.selected
                        }
                    }).then((res) => {
                        this.distributor = res;

                        this.addValueDistributorItem(res);

                    }).finally(() => {
                        $('#loading-distri').hide();
                    })
                }
            }
        }
    </script>
</section>
