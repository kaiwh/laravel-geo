+ function($) {
    var Geo = function(element, geos) {
        var _this = this;
        _this.$element = element;
        _this.data = {
            json: {},
            selected: {}
        };
        _this.input = {};
        _this.defaults = {};
        _this.setDefaults();
        _this.data.json = geos;
        _this.event();
    }
    Geo.prototype.setDefaults = function() {
        var _this = this;
        if (_this.$element.attr('province_id') !== 'undefined') {
            _this.defaults.province_id = _this.$element.attr('province_id');
        } else {
            _this.defaults.province_id = '';
        }
        if (_this.$element.attr('city_id') !== 'undefined') {
            _this.defaults.city_id = _this.$element.attr('city_id');
        } else {
            _this.defaults.city_id = '';
        }
        if (_this.$element.attr('district_id') !== 'undefined') {
            _this.defaults.district_id = _this.$element.attr('district_id');
        } else {
            _this.defaults.district_id = '';
        }
        // inputs
        var html = '<input name="province_id" type="hidden" value="" class="form-control" />';
        html += '<input name="province" type="hidden" value="" class="form-control" />';
        html += '<input name="city_id" type="hidden" value="" class="form-control" />';
        html += '<input name="city" type="hidden" value="" class="form-control" />';
        html += '<input name="district_id" type="hidden" value="" class="form-control" />';
        html += '<input name="district" type="hidden" value="" class="form-control" />';
        html += '<div data-geo="province" class="pull-left"></div>';
        html += '<div data-geo="city" class="pull-left"></div>';
        html += '<div data-geo="district" class="pull-left"></div>';
        _this.$element.append(html);
        // province
        _this.input.$provinceId = _this.$element.find('input[name=province_id]');
        _this.input.$province = _this.$element.find('input[name=province]');
        _this.$province = _this.$element.find('div[data-geo="province"]');
        // city
        _this.input.$cityId = _this.$element.find('input[name=city_id]');
        _this.input.$city = _this.$element.find('input[name=city]');
        _this.$city = _this.$element.find('div[data-geo="city"]');
        // district
        _this.input.$districtId = _this.$element.find('input[name=district_id]');
        _this.input.$district = _this.$element.find('input[name=district]');
        _this.$district = _this.$element.find('div[data-geo="district"]');
    }
    Geo.prototype.event = function(callback) {
        var _this = this;
        _this.province();
        _this.city();
        _this.district();
    }
    Geo.prototype.provinceEvent = function() {
        var _this = this;
        _this.$province.find('select').on('change', function() {
            _this.setValue('province', $(this).find('option:selected').val());
            _this.city();
            _this.district();
        });
    }
    Geo.prototype.cityEvent = function() {
        var _this = this;
        _this.$city.find('select').on('change', function() {
            _this.setValue('city', $(this).find('option:selected').val());
            _this.district();
        });
    }
    Geo.prototype.districtEvent = function() {
        var _this = this;
        _this.$district.find('select').on('change', function() {
            _this.setValue('district', $(this).find('option:selected').val());
        });
    }
    Geo.prototype.setValue = function(type, value = 0) {
        var _this = this;
        if (type == 'province') {
            if (!value) {
                value = _this.$province.find('option:selected').val();
            }
            _this.data.selected.provinceId = value;
            _this.input.$provinceId.val(_this.data.selected.provinceId);
            _this.input.$province.val(_this.data.json.province[_this.data.selected.provinceId]);
        } else if (type == 'city') {
            if (!value) {
                value = _this.$city.find('option:selected').val();
            }
            _this.data.selected.cityId = value;
            _this.input.$cityId.val(_this.data.selected.cityId);
            _this.input.$city.val(_this.data.json.city[_this.data.selected.provinceId][_this.data.selected.cityId]);
        } else if (type == 'district') {
            if (value) {
                _this.data.selected.districtId = value;
                _this.input.$districtId.val(_this.data.selected.districtId);
                _this.input.$district.val(_this.data.json.district[_this.data.selected.provinceId][_this.data.selected.cityId][_this.data.selected.districtId]);
            } else if (_this.$district.find('select').length) {
                _this.data.selected.districtId = _this.$district.find('option:selected').val();
                _this.input.$districtId.val(_this.data.selected.districtId);
                _this.input.$district.val(_this.data.json.district[_this.data.selected.provinceId][_this.data.selected.cityId][_this.data.selected.districtId]);
            } else {
                _this.data.selected.districtId = '';
                _this.input.$districtId.val('');
                _this.input.$district.val('');
            }
        }
    }
    Geo.prototype.province = function() {
        var _this = this;
        var province = _this.data.json.province;
        if (!province) {
            console.log('数据有误！');
            return;
        }
        var html = '<select class="form-control">';
        for (var i in province) {
            if (_this.defaults.province_id == i) {
                html += '<option value="' + i + '" selected>' + province[i] + '</option>';
            } else {
                html += '<option value="' + i + '">' + province[i] + '</option>';
            }
        }
        html + '</select>';
        _this.$province.empty().append(html);
        _this.setValue('province', 0);
        _this.provinceEvent();
    }
    Geo.prototype.city = function() {
        var _this = this;
        _this.$city.empty();
        var city = _this.data.json.city[_this.data.selected.provinceId];
        if (city) {
            var html = '<select class="form-control">';
            for (var i in city) {
                if (_this.defaults.city_id == i) {
                    html += '<option value="' + i + '" selected>' + city[i] + '</option>';
                } else {
                    html += '<option value="' + i + '">' + city[i] + '</option>';
                }
            }
            html += '</select>';
            _this.$city.append(html);
            _this.cityEvent();
        }
        _this.setValue('city', 0);
    }
    Geo.prototype.district = function() {
        var _this = this;
        _this.$district.empty();
        var district = _this.data.json.district[_this.data.selected.provinceId][_this.data.selected.cityId];
        if (district) {
            var html = '<select class="form-control">';
            for (var i in district) {
                if (_this.defaults.district_id == i) {
                    html += '<option value="' + i + '" selected>' + district[i] + '</option>';
                } else {
                    html += '<option value="' + i + '">' + district[i] + '</option>';
                }
            }
            html += '</select>';
            _this.$district.append(html);
            _this.districtEvent();
        }
        _this.setValue('district', 0);
    }
    Geo.prototype.json = function(callback) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/geo',
            dataType: 'json',
            success: function(json) {
                if (typeof callback === 'function') {
                    callback(json);
                }
            }
        });
    }

    function geoList(callback) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/geo',
            dataType: 'json',
            success: function(json) {
                if (typeof callback === 'function') {
                    callback(json);
                }
            }
        });
    }
    geoList(function(geos) {
        $.fn.geo = function() {
            return this.each(function() {
                var $this = $(this)
                var data = $this.data('k.geo')
                if (!data) $this.data('k.geo', (data = new Geo($this, geos)))
            });
        }
        $(document).ready(function() {
            $('[data-toggle=\'geo\']').geo();
            $(document).ajaxStop(function() {
                $('[data-toggle=\'geo\']').geo();
            });
        });
    });
}(jQuery);