/**
 * Created by Abno-44 on 1/13/2017.
 */

var EptServices = angular.module('ReportModule');

EptServices.service('EptServices', function () {
    this.EptServiceObject = {};
    this.EptServiceObject.loaderStatus = {};
    var itemsPerPage = 5;
    var alphaNumHyDashRegExp = /^[a-zA-Z0-9\-\/]+$/;
    var alphaNumHyDashSpaceRegExp = /^[a-zA-Z0-9\-\/]+$/;
    this.EptServiceObject.loaderStatus = {

        fbMessage: '',
        fbStatus: false,
        fbbgColor: 'alert-success'
    }


    this.EptServiceObject.returnAlphaNumHyDashSpaceRegExp = function () {
        return alphaNumHyDashSpaceRegExp;
    }
    this.EptServiceObject.returnAlphaNumHyDashRegExp = function () {
        return alphaNumHyDashRegExp;
    }
    this.EptServiceObject.returnLoaderStatus = function (status) {
        var loaderStatus = {};
        if (status == 0 || status == 3) {
            loaderStatus = {
                fbStatus: true,
                fbMessage: 'Error : Bad server response,please contact admin',
                fbbgColor: 'alert-danger'
            }
        }
        if (status == 1) {
            loaderStatus = {
                fbStatus: true,
                fbMessage: 'Data saved successfully',
                fbbgColor: 'alert-success'
            }
        }
        if (status == 2) {
            loaderStatus = {
                fbStatus: true,
                fbMessage: 'No data available or missing fields',
                fbbgColor: 'alert-warning'
            }
        }
        if (status == 4) {
            loaderStatus = {
                fbStatus: true,
                fbMessage: 'Please fill all the fields,or missing data',
                fbbgColor: 'alert-warning'
            }
        }
        // else {
        //     loaderStatus = {
        //         fbStatus: true,
        //         fbMessage: 'Unknown error occurred',
        //         fbbgColor: 'alert-warning'
        //     }
        // }

        return loaderStatus;
    }
    this.EptServiceObject.returnItemsPerPage = function () {
        return itemsPerPage;
    }
    this.EptServiceObject.returnServerUrl = function (table) {
        var url = '';
        if (table == 'tbl_bac_samples' || table == 'tbl_bac_panel_mst' || table == 'tbl_bac_shipments') {
            url = 'selectfromtable';
        }
        console.log(url)

        return url;
    }

    this.EptServiceObject.returnIdArray = function(arrayData, id, checker) {
        try {
            if (angular.isNumber(Number(id))) {
                if (checker) {

                    arrayData.push(id);
                } else {
                    var indexOf = arrayData.indexOf(id);
                    arrayData.splice(indexOf, 1);
                }

            } else {
                console.log('id not a number');
            }

            return arrayData;
        } catch (error) {
            console.log(error);
        }
    }


    this.EptServiceObject.returnLoaderInfo = function () {
        return EptServiceObject.loaderStatus;
    }


})
EptServices.factory('EptFactory', function () {

})