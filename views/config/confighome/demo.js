const configSections = {
    "name": "demo",
    "value": [
        "about",
        "feedback",
        "partner",
        "contact",
        "categories_product",
        "products_feture",
        "products_menu",
    ]
}

const configProductsMenu = {
    "data": [
        {
            "name" : "Thời trang nam",
            "slug": "thoi-trang-nam",
            "id": "67",
            "children": [
                {
                    "name" : "Trang phục",
                    "slug": "trang-phuc-nam",
                },
                {
                    "name" : "Phụ kiện",
                    "slug": "phu-kien-thoi-trang-nam",
                },
                {
                    "name" : "Giày dép",
                    "slug": "giay-dep-nam",
                },
                {
                    "name" : "Đồ lót",
                    "slug": "do-lot-nam",
                },
                {
                    "name" : "Giày của bé",
                    "slug": "giay-be-trai",
                },
                {
                    "name" : "Trang phục bé",
                    "slug": "trang-phuc-be-trai",
                }
            ]
        },
        {
            "name" : "Trang phục nam",
            "slug": "trang-phuc-nam",
            "id": "11",
            "children": [
                {
                    "name" : " Áo hoodie",
                    "slug": "ao-hoodie-nam",
                },
                {
                    "name" : "Áo khoác",
                    "slug": "ao-khoac-nam",
                },
                {
                    "name" : "Áo Polo",
                    "slug": "ao-polo-nam",
                },
                {
                    "name" : "Áo sơ mi",
                    "slug": "ao-so-mi-nam",
                },
                {
                    "name" : "Áo thun",
                    "slug": "ao-thun-nam",
                },
                {
                    "name" : "Áo trùm đầu",
                    "slug": "ao-trum-dau-cardigan-nam",
                },
                {
                    "name" : "Đồ vest",
                    "slug": "do-vest-nam",
                },
                {
                    "name" : "Quần dài",
                    "slug": "quan-dai-nam",
                },
                {
                    "name" : "Quần Jean",
                    "slug": "quan-jean-nam",
                },
                {
                    "name" : "Quần short",
                    "slug": "quan-short-nam",
                },
                {
                    "name" : "Hồi giáo",
                    "slug": "trang-phuc-hoi-giao",
                }
            ]
        },
        {
            "name" : "Phụ kiện thời trang nam",
            "slug": "phu-kien-thoi-trang-nam",
            "id": "14",
            "children": [
                {
                    "name" : "Thắt lưng",
                    "slug": "that-lung-nam",
                },
                {
                    "name" : "Tất vớ",
                    "slug": "tat-vo-nam",
                },
                {
                    "name" : "Ô dù",
                    "slug": "o-du",
                },
                {
                    "name" : "Nón mũ nam",
                    "slug": "non-mu-nam",
                },
                {
                    "name" : "Nơ thời trang",
                    "slug": "no-thoi-trang",
                },
                {
                    "name" : "Khẩu trang",
                    "slug": "khau-trang-vai",
                },
                {
                    "name" : "Khăn choàng",
                    "slug": "khan-choang-nam",
                },
                {
                    "name" : "Găng tay",
                    "slug": "gang-tay-nam",
                },
                {
                    "name" : "Cà vạt",
                    "slug": "ca-vat",
                }
            ]
        },
    ]
}

const configSecAbout = {
    "title": "",
    "deps": "",
    "data": [{
        "subTitle": "Dịch vụ tận tâm",
        "icon": `<svg class="inline-block text-green-500" width="30px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>`,
        "classIcon": "f-light-success",
        "subDeps": "Chúng tôi tin tưởng sẽ làm hài lòng quý khách hàng sử dụng sản phẩm của chúng tôi."
    }, {
        "subTitle": "Giá thành hợp lý",
        "icon": `<svg class="inline-block text-yellow-500" width="30px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>`,
        "classIcon": "f-light-warning",
        "subDeps": "Chúng tôi tin tưởng sẽ làm hài lòng quý khách hàng sử dụng sản phẩm của chúng tôi."
    }, {
        "subTitle": "Sản phẩm đa dạng",
        "icon": `<svg class="inline-block text-blue-500" width="30px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>`,
        "classIcon": "f-light-blue",
        "subDeps": "Chúng tôi tin tưởng sẽ làm hài lòng quý khách hàng sử dụng sản phẩm của chúng tôi."
    }]
}

const configSecFeedback = {
    "data": [
        {
            "title": "ShopMen Thời trang giới trẻ",
            "link": "#",
            "deps": "Trong hơi thở dồn dập của thời đại, chuyện ăn mặc của con người không còn dừng ở “ăn no mặc ấm” mà đã “thoát xác”, trở thành một tín ngưỡng, một niềm tin lấp lánh bao phủ lấy chúng ta.",
            "img": "/storage/images/k-3.jpg"
        },
        {
            "title": "ShopMen Thời trang giới trẻ",
            "link": "#",
            "deps": "Trải qua bao thăng trầm của lịch sử, những tích tụ của quá khứ tạo thành lớp bụi vàng lấp lánh để những người trẻ Việt gìn giữ, chắt chiu và sáng tạo bằng tất cả tâm huyết của mình.",
            "img": "/storage/images/k-2.jpg"
        },
        {
            "title": "ShopMen Thời trang giới trẻ",
            "link": "#",
            "deps": "Họ chính là những người tài hoa và nhiệt huyết nhất của làng thời trang Việt. Bằng tài năng thiên phú kết hợp với sự nhẫn nại, kiên trì và lòng yêu nghề, những “đôi bàn tay vàng”",
            "img": "/storage/images/k-1.jpg"
        }
    ]
}

const bannerSlide = [
    {
        "img":"/storage/images/b-1.jpg"
    },
    {
        "img":"/storage/images/b-2.jpg"
    }
]

const bannerGrid = [
    {
        "img":"/storage/images/grid-1.jpg",
        "link":"/product-category/thoi-trang-nam"
    },
    {
        "img":"/storage/images/grid-2.jpg",
        "link":"/product-category/giay-dep-nam"
    },
    {
        "img":"/storage/images/grid-3.jpg",
        "link":"/product-category/trang-phuc-be-trai"
    },
    {
        "img":"/storage/images/grid-4.jpg",
        "link":"/product-category/phu-kien-thoi-trang-nam"
    },
    {
        "img":"/storage/images/grid-5.jpg",
        "link":"/product-category/trang-phuc-nam"
    },
    {
        "img":"/storage/images/grid-6.jpg",
        "link":"/product-category/thoi-trang-nam"
    }
]

console.log(JSON.stringify(bannerGrid))
