<section class="section-custom sec-testimonials">
    <div class="max-w-6xl mx-auto px-8">
        <div class="relative" x-data="{ activeSlide: 1, slides:[1, 2, 3] }">
            <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden" key="1" x-show="activeSlide === 1">
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <img class="absolute h-full w-full object-cover" src="https://ocart.test/storage/images/k-3.jpg" alt=""/>
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-4 lg:py-24 px-4 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            Trong hơi thở dồn dập của thời đại, chuyện ăn mặc của con người không còn dừng ở “ăn no mặc ấm” mà đã “thoát xác”, trở thành một tín ngưỡng, một niềm tin lấp lánh bao phủ lấy chúng ta.
                        </p>
                        <p class="mt-6">
                            <a href="javascript:void(0)" class="font-medium text-blue-600 hover:text-red-900">Công ty Thiết Kế Sevenweb.vn &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden" key="2" x-show="activeSlide === 2">
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <img class="absolute h-full w-full object-cover" src="https://ocart.test/storage/images/k-2.jpg" alt=""/>
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-12 lg:py-24 px-8 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            Trải qua bao thăng trầm của lịch sử, những tích tụ của quá khứ tạo thành lớp bụi vàng lấp lánh để những người trẻ Việt gìn giữ, chắt chiu và sáng tạo bằng tất cả tâm huyết của mình.
                        </p>
                        <p class="mt-6">
                            <a href="javascript:void(0)" class="font-medium text-blue-600 hover:text-red-900">Thiết Kế Sevenweb.vn &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative lg:flex rounded-lg shadow-2xl overflow-hidden" key="3" x-show="activeSlide === 3">
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <img class="absolute h-full w-full object-cover" src="https://ocart.test/storage/images/k-1.jpg" alt=""/>
                    <div class="absolute inset-0 bg-indigo-900 opacity-20"></div>
                </div>
                <div class="relative lg:w-7/12 bg-white">
                    <svg class="absolute h-full text-white w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>
                    <div class="relative py-4 lg:py-24 px-4 lg:px-16 text-gray-700 leading-relaxed">
                        <p>
                            Họ chính là những người tài hoa và nhiệt huyết nhất của làng thời trang Việt. Bằng tài năng thiên phú kết hợp với sự nhẫn nại, kiên trì và lòng yêu nghề, những “đôi bàn tay vàng”.
                        </p>
                        <p class="mt-6">
                            <a href="javascript:void(0)" class="font-medium text-blue-600 hover:text-red-900">Công ty Thiết Kế Sevenweb.vn &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 left-0 lg:flex lg:items-center">
                <button class="mt-24 lg:mt-0 -ml-6 h-12 w-12 rounded-full bg-white p-3 shadow-lg focus:outline-none" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    <svg class="h-full w-full text-indigo-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5.41 11H21a1 1 0 0 1 0 2H5.41l5.3 5.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 1.4L5.4 11z"/>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 lg:flex lg:items-center">
                <button class="mt-24 lg:mt-0 -mr-6 h-12 w-12 rounded-full bg-white p-3 shadow-lg focus:outline-none" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    <svg class="h-full w-full text-indigo-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
