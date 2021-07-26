const configMenu = {
    "data": [
        {
            "name":"Trang chủ",
            "slug":"/"
        },
        {
            "name":"Sản phẩm",
            "slug":"#",
            "children":[
                {
                    "name":"Khí công nghiệp",
                    "slug":"/product-category/khi-cong-nghiep",
                },
                {
                    "name":"Khí đặc biệt",
                    "slug":"/product-category/khi-dac-biet",
                },
                {
                    "name":"Khí chuẩn",
                    "slug":"/product-category/khi-chuan",
                },
                {
                    "name":"Khí y tế",
                    "slug":"/product-category/khi-y-te",
                },
                {
                    "name":"Thiết bị ngành khí",
                    "slug":"/product-category/thiet-bi-nganh-khi",
                },
                {
                    "name":"Các sản phẩm - dịch vụ khác",
                    "slug":"/product-category/khac",
                }
            ]
        },
        {
            "name":"Tin tức",
            "slug":"#",
            "children":[
                {
                    "name":"Hoạt động của công ty",
                    "slug":"/post-category/hoat-dong-cua-cong-ty",
                },
                {
                    "name":"Kiến thức ngành khí",
                    "slug":"/post-category/kien-thuc-nganh-khi",
                    "children": [
                        {
                            "name":"Ứng dụng khí",
                            "slug":"/post-category/ung-dung-khi",
                        },
                        {
                            "name":"Các kiến thức khác",
                            "slug":"/post-category/cac-kien-thuc-khac",
                        }
                    ]
                }
            ]
        },
        {
            "name": "Liên hệ",
            "slug": "/contact.html"
        }
    ]
}

const configMenuFooter = {
    "data": [
        {
            "title": "Sản phẩm",
            "menu": [
                {
                    "name":"Khí công nghiệp",
                    "slug":"/product-category/khi-cong-nghiep",
                },
                {
                    "name":"Khí đặc biệt",
                    "slug":"/product-category/khi-dac-biet",
                },
                {
                    "name":"Khí chuẩn",
                    "slug":"/product-category/khi-chuan",
                },
                {
                    "name":"Khí y tế",
                    "slug":"/product-category/khi-y-te",
                },
                {
                    "name":"Thiết bị ngành khí",
                    "slug":"/product-category/thiet-bi-nganh-khi",
                },
                {
                    "name":"Các sản phẩm - dịch vụ khác",
                    "slug":"/product-category/khac",
                }
            ]
        },
        {
            "title": "Tin tức",
            "menu": [
                {
                    "name":"Hoạt động của công ty",
                    "slug":"/post-category/hoat-dong-cua-cong-ty",
                },
                {
                    "name":"Kiến thức ngành khí",
                    "slug":"/post-category/kien-thuc-nganh-khi",
                },
                {
                    "name":"Ứng dụng khí",
                    "slug":"/post-category/ung-dung-khi",
                },
                {
                    "name":"Các kiến thức khác",
                    "slug":"/post-category/cac-kien-thuc-khac",
                }
            ]
        },
        {
            "title": "Liên kết",
            "menu": [
                {
                    "name": "Giới thiệu",
                    "slug": "/about.html"
                },
                {
                    "name": "Liên hệ",
                    "slug": "/contact.html"
                },
                {
                    "name": "Facebook",
                    "slug": "https://www.facebook.com/Doanh-nghiệp-kh%C3%AD-Thủ-Đô-Xanh-110401501245965"
                },
                {
                    "name": "Zalo",
                    "slug": "https://zalo.me/0912110941 "
                },
            ]
        }
    ]
}

const configSections = {
    "name": "khithudo",
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
            "title": "Công ty TNHH Thương mại và kỹ thuật Thủ Đô Xanh",
            "link": "#",
            "deps": "Công ty TNHH Thương mại và kỹ thuật Thủ Đô Xanh là đơn vị có thâm niên trong lĩnh vực tư vấn môi trường, đã thực hiện nhiều dự án trọng điểm. Các khách hàng có thể kể đến như Geleximco, Tập đoàn BĐS Tây Bắc, Cảng Quy Nhơn, Greenity Nam Định và nhiều chủ dự án là các công ty FDI tại nhiều Khu công nghiệp tại Bắc Ninh, Hà Nội, Hưng Yên, Thái Bình, Hà Nam...",
            "img": "https://thudoxanh.com.vn/images/f3b74354-92c2-470a-bc5b-39bff0910f00-optimized-ligh.jpg"
        },
        {
            "title": "Công ty TNHH Thương mại và kỹ thuật Thủ Đô Xanh",
            "link": "#",
            "deps": "Chúng tôi tin tưởng với năng lực kinh nghiệm và mối quan hệ mật thiết với các Bộ, Sở ban ngành trong lĩnh vực môi trường, chúng tôi có thể đảm bảo thực hiện đúng tiến độ với chất lượng hoàn hảo, giá cả phải chăng cho các gói thầu của Quý doanh nghiệp. Liên hệ hotline: 0912.110.941 và mọi vấn đề nằm trong lĩnh vực môi trường của Quý doanh nghiệp sẽ được giải quyết.",
            "img": "https://thudoxanh.com.vn/images/f3b74354-92c2-470a-bc5b-39bff0910f00-optimized-ligh.jpg"
        }
    ]
}

const configProductsMenu = {
    "data": [
        {
            "name" : "Phòng ngủ",
            "slug": "danh-muc-con-3",
            "id": "1",
            "children": [
                {
                    "name" : "Giường",
                    "slug": "giuong",
                },
                {
                    "name" : "Tủ quần áo",
                    "slug": "tu-quan-ao",
                }
            ]
        },
        {
            "name" : "Phòng khách",
            "slug": "danh-muc-con-3",
            "id": "2",
            "children": [
                {
                    "name" : "Bàn Ghế",
                    "slug": "ban-ghe",
                },
                {
                    "name" : "Kệ tivi",
                    "slug": "ke-ti-vi",
                }
            ]
        },
    ]
}

console.log(JSON.stringify(configProductsMenu))
