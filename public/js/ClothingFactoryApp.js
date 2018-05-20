
var CFApp = angular.module("CFModule", ["ngRoute"])
        .controller("shopController", function ($rootScope, $scope, $http, $sce) {

            $rootScope.getProducts = function ($products) {
                $rootScope.products = $products;
                counter = {};
                $products.forEach(function (element) {
                    var key = JSON.stringify(element.category_id);
                    counter[key] = (counter[key] || 0) + 1;
                });
                $rootScope.counter = counter;

            };

            $rootScope.getCategories = function ($categories) {
                $rootScope.categories = $categories;
            };

            $scope.sortProducts = "+updated_at";

            $scope.addToCart = function () {
                $http({
                    method: "GET",
                    url: BASE_URL + "shop/add-to-cart?id=" + this.product.id
                }).then(function (response) {
                    $rootScope.data = response.data;
                    window.location.reload();
                });

            };

            $scope.counculate = function (str) {
                var res = counter[str];
                return res;
            };

        });
