/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  mounted: function mounted() {
    this.getProductos();
    this.getTiposProductos();
  },
  //end mounted
  data: function data() {
    return {
      url: "https://vencor.test/",
      productos: [],
      tiposProductos: [],
      newProducto: {
        newTipoProducto: "",
        newNombre: "",
        newMarca: "",
        newStock: "",
        newPrecio: "",
        newImagen: ""
      },
      editProducto: {
        id_producto: "",
        editTipoProducto: "",
        editNombre: "",
        editMarca: "",
        editStock: "",
        editPrecio: "",
        editImagen: "",
        imagenPrevia: ""
      },
      newTipoProductoDescripcion: ""
    };
  },
  //end data
  methods: {
    noPositiveStock: function noPositiveStock(stock) {
      return stock < 0;
    },
    //end IsPositiveStock
    noPositivePrecio: function noPositivePrecio(precio) {
      return precio < 0;
    },
    //end IsPositiveStock
    esDisponible: function esDisponible(disponible) {
      if (disponible == 1) {
        return 'btn-success';
      }

      return 'btn-danger';
    },
    getProductos: function getProductos() {
      var _this = this;

      axios.get('/api/producto').then(function (response) {
        _this.productos = response.data;
      });
    },
    //end getProductos
    capturarProducto: function capturarProducto(producto) {
      this.editProducto.id_producto = producto.id_producto;
      this.editProducto.editTipoProducto = producto.tipoProducto_id;
      this.editProducto.editNombre = producto.nombre;
      this.editProducto.editMarca = producto.marca;
      this.editProducto.editStock = producto.stock;
      this.editProducto.editPrecio = producto.precio;
      this.editProducto.editImagen = producto.p_imagen;
      this.editProducto.imagenPrevia = this.url + 'image/' + producto.p_imagen;
    },
    editarProducto: function editarProducto() {
      var _this2 = this;

      axios.put('/api/producto/' + this.editProducto.id_producto, {
        tipoProducto_id: this.editProducto.editTipoProducto,
        nombre: this.editProducto.editNombre,
        marca: this.editProducto.editMarca,
        stock: this.editProducto.editStock,
        precio: this.editProducto.editPrecio,
        imagen: this.editProducto.editImagen
      }).then(function (response) {
        toastr.success('Producto modificado');
        _this2.$refs.fileImage.value = '';

        _this2.getProductos();

        $('#editarProducto').modal('hide');
      })["catch"](function (error) {
        console.log(error.response.data);
        toastr.error('Error al moficar el producto');
      });
    },
    deleteProducto: function deleteProducto(producto) {
      var _this3 = this;

      axios["delete"]('/api/producto/' + producto.id_producto).then(function (response) {
        _this3.getProductos();

        toastr.success('Estado del producto modificado');
      });
    },
    //end deleteProductos
    addNewProducto: function addNewProducto() {
      var _this4 = this;

      var formData = new FormData();
      formData.append('tipoProducto', this.newProducto.newTipoProducto);
      formData.append('nombre', this.newProducto.newNombre);
      formData.append('marca', this.newProducto.newMarca);
      formData.append('stock', this.newProducto.newStock);
      formData.append('precio', this.newProducto.newPrecio);
      formData.append('imagen', this.newProducto.newImagen);
      axios.post('/api/producto', formData).then(function (response) {
        toastr.success('Nuevo producto registrado');
        $('#nuevoProducto').modal('hide');

        _this4.getProductos();

        _this4.$refs.fileImage.value = '';
        _this4.newProducto.newTipoProducto = "";
        _this4.newProducto.newNombre = "";
        _this4.newProducto.newMarca = "";
        _this4.newProducto.newStock = "";
        _this4.newProducto.newPrecio = "";
        _this4.newProducto.newImagen = "";
      })["catch"](function (error) {
        //this.error.newStock = error.
        //console.log(error.response.data);
        toastr.error('Error en el registro del producto');
      });
    },
    // end addNewProducto
    getTiposProductos: function getTiposProductos() {
      var _this5 = this;

      axios.get('/api/tipos-productos').then(function (response) {
        _this5.tiposProductos = response.data;
      });
    },
    //end getTiposProductos
    addNewTipoProducto: function addNewTipoProducto() {
      var _this6 = this;

      axios.post('/api/tipos-productos', {
        descripcion: this.newTipoProductoDescripcion
      }).then(function (response) {
        toastr.success('Nuevo tipo de proucto agregado');
        _this6.newTipoProductoDescripcion = "";

        _this6.getTiposProductos();
      });
    },
    //end addNewTipoProducto
    obtenerImagen: function obtenerImagen(e) {
      var _this7 = this;

      var file = e.target.files[0];
      var fileReader = new FileReader();
      fileReader.readAsDataURL(file);

      fileReader.onload = function (e) {
        _this7.newProducto.newImagen = e.target.result;
        _this7.editProducto.editImagen = e.target.result;
        _this7.editProducto.imagenPrevia = e.target.result;
      };
    } //end obtenerImagen

  } // end methods

}); //end

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364& ***!
  \*********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container my-4" }, [
    _vm._m(0),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade bd-example-modal-lg",
        attrs: {
          id: "nuevoProducto",
          tabindex: "-1",
          role: "dialog",
          "aria-labelledby": "exampleModalLabel",
          "aria-hidden": "true"
        }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog modal-lg", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _c("div", { staticClass: "modal-header" }, [
                _c(
                  "h5",
                  {
                    staticClass: "modal-title",
                    attrs: { id: "exampleModalLabel" }
                  },
                  [_vm._v("Nuevo producto")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "dropdown d-inline-block mx-4" }, [
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-success btn-sm dropdown-toggle",
                      attrs: {
                        type: "button",
                        id: "dropdownMenuButton",
                        "data-toggle": "dropdown",
                        "aria-haspopup": "true",
                        "aria-expanded": "false"
                      }
                    },
                    [_vm._v("Nuevo tipo de producto")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass: "dropdown-menu",
                      attrs: { "aria-labelledby": "dropdownMenuButton" }
                    },
                    [
                      _c(
                        "form",
                        {
                          staticClass: "px-4 py-3",
                          attrs: { method: "POST" },
                          on: {
                            submit: function($event) {
                              $event.preventDefault()
                              return _vm.addNewTipoProducto($event)
                            }
                          }
                        },
                        [
                          _c("div", { staticClass: "form-group" }, [
                            _c("label", { attrs: { for: "descripcion" } }, [
                              _vm._v("Nuevo Tipo de producto")
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.newTipoProductoDescripcion,
                                  expression: "newTipoProductoDescripcion"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                id: "descripcion",
                                placeholder: "Ejemplo: harina."
                              },
                              domProps: {
                                value: _vm.newTipoProductoDescripcion
                              },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.newTipoProductoDescripcion =
                                    $event.target.value
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c(
                            "button",
                            {
                              staticClass: "btn btn-primary",
                              class: {
                                disabled: !_vm.newTipoProductoDescripcion
                              },
                              attrs: { type: "submit" }
                            },
                            [_vm._v("Guardar")]
                          )
                        ]
                      )
                    ]
                  )
                ]),
                _vm._v(" "),
                _vm._m(1)
              ]),
              _vm._v(" "),
              _c(
                "form",
                {
                  attrs: { enctype: "multipart/form-data" },
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.addNewProducto($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newTipoProducto" }
                        },
                        [_vm._v("Tipo producto")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c(
                          "select",
                          {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.newProducto.newTipoProducto,
                                expression: "newProducto.newTipoProducto"
                              }
                            ],
                            staticClass: "form-control",
                            attrs: { id: "newTipoProducto" },
                            on: {
                              change: function($event) {
                                var $$selectedVal = Array.prototype.filter
                                  .call($event.target.options, function(o) {
                                    return o.selected
                                  })
                                  .map(function(o) {
                                    var val = "_value" in o ? o._value : o.value
                                    return val
                                  })
                                _vm.$set(
                                  _vm.newProducto,
                                  "newTipoProducto",
                                  $event.target.multiple
                                    ? $$selectedVal
                                    : $$selectedVal[0]
                                )
                              }
                            }
                          },
                          [
                            _c("option", { attrs: { value: "" } }, [
                              _vm._v("-- Seleccionar tipo de producto --")
                            ]),
                            _vm._v(" "),
                            _vm._l(_vm.tiposProductos, function(tipoProducto) {
                              return _c(
                                "option",
                                {
                                  domProps: {
                                    value: tipoProducto.id_tipoProducto
                                  }
                                },
                                [_vm._v(_vm._s(tipoProducto.tp_descripcion))]
                              )
                            })
                          ],
                          2
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newNombre" }
                        },
                        [_vm._v("Nombre producto")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.newProducto.newNombre,
                              expression: "newProducto.newNombre"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            id: "newNombre",
                            type: "text",
                            required: ""
                          },
                          domProps: { value: _vm.newProducto.newNombre },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.newProducto,
                                "newNombre",
                                $event.target.value
                              )
                            }
                          }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newMarca" }
                        },
                        [_vm._v("Marca")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.newProducto.newMarca,
                              expression: "newProducto.newMarca"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { id: "newMarca", type: "text", required: "" },
                          domProps: { value: _vm.newProducto.newMarca },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.newProducto,
                                "newMarca",
                                $event.target.value
                              )
                            }
                          }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newStock" }
                        },
                        [_vm._v("Stock")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.newProducto.newStock,
                              expression: "newProducto.newStock"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            id: "newStock",
                            type: "number",
                            required: ""
                          },
                          domProps: { value: _vm.newProducto.newStock },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.newProducto,
                                "newStock",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.noPositiveStock(_vm.newProducto.newStock)
                          ? _c("small", { staticClass: "text-danger" }, [
                              _vm._v("El stock debe ser mayor que 0")
                            ])
                          : _vm._e()
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newPrecio" }
                        },
                        [_vm._v("Precio")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.newProducto.newPrecio,
                              expression: "newProducto.newPrecio"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            id: "newPrecio",
                            type: "number",
                            placeholder: "0.00",
                            step: "0.01",
                            required: ""
                          },
                          domProps: { value: _vm.newProducto.newPrecio },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.newProducto,
                                "newPrecio",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.noPositivePrecio(_vm.newProducto.newPrecio)
                          ? _c("small", { staticClass: "text-danger" }, [
                              _vm._v("El precio debe ser mayor que 0")
                            ])
                          : _vm._e()
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "newImagen" }
                        },
                        [_vm._v("Imagen")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          ref: "fileImage",
                          attrs: {
                            id: "newImagen",
                            type: "file",
                            accept: "image/*",
                            required: ""
                          },
                          on: { change: _vm.obtenerImagen }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "row justify-content-center" }, [
                      _c("div", { staticClass: "col-md-4" }, [
                        _c("div", { staticClass: "card" }, [
                          _c("img", {
                            staticClass: "card-img-top",
                            staticStyle: { height: "160px" },
                            attrs: {
                              src: _vm.newProducto.newImagen,
                              alt: "Card image cap"
                            }
                          }),
                          _vm._v(" "),
                          _c("h5", { staticClass: "card-header" }, [
                            _vm._v(_vm._s(_vm.newProducto.newNombre))
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "card-body" }, [
                            _c("p", { staticClass: "card-text" }, [
                              _vm._v(
                                "Marca: " + _vm._s(_vm.newProducto.newMarca)
                              )
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "card-text" }, [
                              _vm._v(
                                "Stock: " + _vm._s(_vm.newProducto.newStock)
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "card-footer " }, [
                            _c("span", { staticClass: "card-link" }, [
                              _vm._v("$" + _vm._s(_vm.newProducto.newPrecio))
                            ])
                          ])
                        ])
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "modal-footer" }, [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-secondary",
                        attrs: { type: "button", "data-dismiss": "modal" }
                      },
                      [_vm._v("Cerrar")]
                    ),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-primary",
                        class: {
                          disabled:
                            _vm.noPositivePrecio(_vm.newProducto.newPrecio) ||
                            _vm.noPositiveStock(_vm.newProducto.newStock)
                        },
                        attrs: { type: "submit" }
                      },
                      [_vm._v("Guardar producto")]
                    )
                  ])
                ]
              )
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "table-responsive" }, [
      _c("table", { staticClass: "table table-hover table-striped" }, [
        _vm._m(2),
        _vm._v(" "),
        _c(
          "tbody",
          _vm._l(_vm.productos, function(producto) {
            return _c("tr", [
              _c("td", [_vm._v(_vm._s(producto.id_producto))]),
              _vm._v(" "),
              _c("td", [
                _c("img", {
                  attrs: {
                    src: _vm.url + "image/" + producto.p_imagen,
                    height: "60px",
                    width: "60px"
                  }
                })
              ]),
              _vm._v(" "),
              _c("td", [_vm._v(_vm._s(producto.nombre))]),
              _vm._v(" "),
              _c("td", [_vm._v(_vm._s(producto.tp_descripcion))]),
              _vm._v(" "),
              _c("td", [_vm._v(_vm._s(producto.marca))]),
              _vm._v(" "),
              _c("td", [_vm._v(_vm._s(producto.precio))]),
              _vm._v(" "),
              _c("td", [_vm._v(_vm._s(producto.stock))]),
              _vm._v(" "),
              _c("td", [
                _c(
                  "button",
                  {
                    staticClass: "btn",
                    class: _vm.esDisponible(producto.estadoProducto_id),
                    on: {
                      click: function($event) {
                        return _vm.deleteProducto(producto)
                      }
                    }
                  },
                  [_vm._v(_vm._s(producto.ep_descripcion))]
                )
              ]),
              _vm._v(" "),
              _c("td", [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-primary",
                    attrs: {
                      "data-toggle": "modal",
                      "data-target": "#editarProducto"
                    },
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.capturarProducto(producto)
                      }
                    }
                  },
                  [_vm._v("Editar")]
                )
              ])
            ])
          }),
          0
        )
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade bd-example-modal-lg",
        attrs: {
          id: "editarProducto",
          tabindex: "-1",
          role: "dialog",
          "aria-labelledby": "exampleModalLabel",
          "aria-hidden": "true"
        }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog modal-lg", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _c("div", { staticClass: "modal-header" }, [
                _c(
                  "h5",
                  {
                    staticClass: "modal-title",
                    attrs: { id: "exampleModalLabel" }
                  },
                  [_vm._v("Editar producto")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "dropdown d-inline-block mx-4" }, [
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-success btn-sm dropdown-toggle",
                      attrs: {
                        type: "button",
                        id: "dropdownMenuButton",
                        "data-toggle": "dropdown",
                        "aria-haspopup": "true",
                        "aria-expanded": "false"
                      }
                    },
                    [_vm._v("Nuevo tipo de producto")]
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass: "dropdown-menu",
                      attrs: { "aria-labelledby": "dropdownMenuButton" }
                    },
                    [
                      _c(
                        "form",
                        {
                          staticClass: "px-4 py-3",
                          attrs: { method: "POST" },
                          on: {
                            submit: function($event) {
                              $event.preventDefault()
                              return _vm.addNewTipoProducto($event)
                            }
                          }
                        },
                        [
                          _c("div", { staticClass: "form-group" }, [
                            _c("label", { attrs: { for: "descripcion" } }, [
                              _vm._v("Nuevo Tipo de producto")
                            ]),
                            _vm._v(" "),
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.newTipoProductoDescripcion,
                                  expression: "newTipoProductoDescripcion"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                id: "descripcion",
                                placeholder: "Ejemplo: harina."
                              },
                              domProps: {
                                value: _vm.newTipoProductoDescripcion
                              },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.newTipoProductoDescripcion =
                                    $event.target.value
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c(
                            "button",
                            {
                              staticClass: "btn btn-primary",
                              class: {
                                disabled: !_vm.newTipoProductoDescripcion
                              },
                              attrs: { type: "submit" }
                            },
                            [_vm._v("Guardar")]
                          )
                        ]
                      )
                    ]
                  )
                ]),
                _vm._v(" "),
                _vm._m(3)
              ]),
              _vm._v(" "),
              _c(
                "form",
                {
                  attrs: { enctype: "multipart/form-data" },
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.editarProducto($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editTipoProducto" }
                        },
                        [_vm._v("Tipo producto")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c(
                          "select",
                          {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.editProducto.editTipoProducto,
                                expression: "editProducto.editTipoProducto"
                              }
                            ],
                            staticClass: "form-control",
                            attrs: { id: "editTipoProducto" },
                            on: {
                              change: function($event) {
                                var $$selectedVal = Array.prototype.filter
                                  .call($event.target.options, function(o) {
                                    return o.selected
                                  })
                                  .map(function(o) {
                                    var val = "_value" in o ? o._value : o.value
                                    return val
                                  })
                                _vm.$set(
                                  _vm.editProducto,
                                  "editTipoProducto",
                                  $event.target.multiple
                                    ? $$selectedVal
                                    : $$selectedVal[0]
                                )
                              }
                            }
                          },
                          [
                            _c("option", { attrs: { value: "" } }, [
                              _vm._v("-- Seleccionar tipo de producto --")
                            ]),
                            _vm._v(" "),
                            _vm._l(_vm.tiposProductos, function(tipoProducto) {
                              return _c(
                                "option",
                                {
                                  domProps: {
                                    value: tipoProducto.id_tipoProducto
                                  }
                                },
                                [_vm._v(_vm._s(tipoProducto.tp_descripcion))]
                              )
                            })
                          ],
                          2
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editNombre" }
                        },
                        [_vm._v("Nombre producto")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.editProducto.editNombre,
                              expression: "editProducto.editNombre"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { id: "editNombre", type: "text" },
                          domProps: { value: _vm.editProducto.editNombre },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.editProducto,
                                "editNombre",
                                $event.target.value
                              )
                            }
                          }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editMarca" }
                        },
                        [_vm._v("Marca")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.editProducto.editMarca,
                              expression: "editProducto.editMarca"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { id: "editMarca", type: "text" },
                          domProps: { value: _vm.editProducto.editMarca },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.editProducto,
                                "editMarca",
                                $event.target.value
                              )
                            }
                          }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editStock" }
                        },
                        [_vm._v("Stock")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.editProducto.editStock,
                              expression: "editProducto.editStock"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { id: "editStock", type: "number" },
                          domProps: { value: _vm.editProducto.editStock },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.editProducto,
                                "editStock",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.noPositiveStock(_vm.editProducto.editStock)
                          ? _c("small", { staticClass: "text-danger" }, [
                              _vm._v("El stock debe ser mayor que 0")
                            ])
                          : _vm._e()
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editPrecio" }
                        },
                        [_vm._v("Precio")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.editProducto.editPrecio,
                              expression: "editProducto.editPrecio"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            id: "editPrecio",
                            type: "number",
                            placeholder: "0.00",
                            step: "0.01"
                          },
                          domProps: { value: _vm.editProducto.editPrecio },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.editProducto,
                                "editPrecio",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _vm.noPositivePrecio(_vm.editProducto.editPrecio)
                          ? _c("small", { staticClass: "text-danger" }, [
                              _vm._v("El precio debe ser mayor que 0")
                            ])
                          : _vm._e()
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group row" }, [
                      _c(
                        "label",
                        {
                          staticClass: "col-md-4 col-form-label text-md-right",
                          attrs: { for: "editImagen" }
                        },
                        [_vm._v("Imagen")]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-6" }, [
                        _c("input", {
                          ref: "fileImage",
                          attrs: {
                            id: "editImagen",
                            type: "file",
                            accept: "image/*"
                          },
                          on: { change: _vm.obtenerImagen }
                        })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "row justify-content-center" }, [
                      _c("div", { staticClass: "col-md-4" }, [
                        _c("div", { staticClass: "card" }, [
                          _c("img", {
                            staticClass: "card-img-top",
                            staticStyle: { height: "160px" },
                            attrs: {
                              src: _vm.editProducto.imagenPrevia,
                              alt: "Card image cap"
                            }
                          }),
                          _vm._v(" "),
                          _c("h5", { staticClass: "card-header" }, [
                            _vm._v(_vm._s(_vm.editProducto.editNombre))
                          ]),
                          _vm._v(
                            "\n\t\t\t\t\t\t  \t\t" +
                              _vm._s(_vm.editProducto.id_producto) +
                              "\n\t\t\t\t\t\t \t \t"
                          ),
                          _c("div", { staticClass: "card-body" }, [
                            _c("p", { staticClass: "card-text" }, [
                              _vm._v(
                                "Marca: " + _vm._s(_vm.editProducto.editMarca)
                              )
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "card-text" }, [
                              _vm._v(
                                "Stock: " + _vm._s(_vm.editProducto.editStock)
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "card-footer " }, [
                            _c("span", { staticClass: "card-link" }, [
                              _vm._v("$" + _vm._s(_vm.editProducto.editPrecio))
                            ])
                          ])
                        ])
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(4)
                ]
              )
            ])
          ]
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "mb-2 text-left" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-primary",
          attrs: {
            type: "button",
            "data-toggle": "modal",
            "data-target": "#nuevoProducto"
          }
        },
        [_vm._v("nuevo")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "close",
        attrs: {
          type: "button",
          "data-dismiss": "modal",
          "aria-label": "Close"
        }
      },
      [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", { staticClass: "thead-bluelight" }, [
      _c("tr", [
        _c("th", { attrs: { scope: "col" } }, [_vm._v("ID")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Imagen")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Producto")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Tipo")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Marca")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Precio")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Stock")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Estado")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Accion")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "close",
        attrs: {
          type: "button",
          "data-dismiss": "modal",
          "aria-label": "Close"
        }
      },
      [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-secondary",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("Cerrar")]
      ),
      _vm._v(" "),
      _c(
        "button",
        { staticClass: "btn btn-primary", attrs: { type: "submit" } },
        [_vm._v("Guardar cambios")]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/gestionarProductos.vue":
/*!********************************************************!*\
  !*** ./resources/js/components/gestionarProductos.vue ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./gestionarProductos.vue?vue&type=template&id=7b6ef364& */ "./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364&");
/* harmony import */ var _gestionarProductos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./gestionarProductos.vue?vue&type=script&lang=js& */ "./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _gestionarProductos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__["render"],
  _gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/gestionarProductos.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_gestionarProductos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./gestionarProductos.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/gestionarProductos.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_gestionarProductos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364& ***!
  \***************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./gestionarProductos.vue?vue&type=template&id=7b6ef364& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/gestionarProductos.vue?vue&type=template&id=7b6ef364&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_gestionarProductos_vue_vue_type_template_id_7b6ef364___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/gestionarProductos.js":
/*!********************************************!*\
  !*** ./resources/js/gestionarProductos.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

Vue.component('gestion-productos', __webpack_require__(/*! ./components/gestionarProductos.vue */ "./resources/js/components/gestionarProductos.vue")["default"]);
var app = new Vue({
  el: '#app'
});

/***/ }),

/***/ 3:
/*!**************************************************!*\
  !*** multi ./resources/js/gestionarProductos.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\vencor\resources\js\gestionarProductos.js */"./resources/js/gestionarProductos.js");


/***/ })

/******/ });