<template>
    <div>
        <div class="form-group">
            <label>دسته بندی</label>
            <select name="category[]" id="" class="form-control" multiple v-model="categories_selected"
                    @change="onchange()">
                <option v-for="category in categories" :value="category.id">{{category.name}}</option>
            </select>
        </div>
        <div v-if="flag">
            <div class="form-group" v-for="(attribute , index) in attributes">
                <label>ویژگی {{attribute.title}}</label>
                <select class="form-control" @change="addAttribute($event , index)">
                    <option>انتخاب کنید...</option>
                    <option v-if="!product" v-for="attribute in attribute.attributevalue" :value="attribute.id">{{attribute.title}}</option>
                    <option v-if="product" v-for="attribute in attribute.attributevalue" :value="attribute.id" :selected="product.attributevalue[index].id === attribute.id">{{attribute.title}}</option>
                </select>
            </div>
        </div>

        <input type="hidden" name="attributes[]" :value="computedAttribute">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                categories: [],
                categories_selected: [],
                flag: false,
                attributes: [],
                selectedAttribute: [],
                computedAttribute: []
            }
        },
        props: ['product'],
        mounted() {
            axios.get('http://66estate.com/api/categories').then(res => {
                console.log(res)
                this.getAllChildren(res.data.categories, 0)
            }).catch(err => {
                console.log(err)
            })
            if (this.product) {
                for (var i = 0; i < this.product.category.length; i++) {
                    this.categories_selected.push(this.product.category[i].id)
                }
                for (var i = 0; i < this.product.attributevalue.length; i++) {
                    this.selectedAttribute.push({
                        'index': i,
                        'value': this.product.attributevalue[i].id
                    })
                    this.computedAttribute.push(this.product.attributevalue[i].id)
                }
                this.onchange();
            }
        },
        methods: {
            getAllChildren: function (currentValue, level) {
                for (var i = 0; i < currentValue.length; i++) {
                    var current = currentValue[i];
                    this.categories.push({
                        id: current.id,
                        name: Array(level + 1).join("---") + " " + current.name
                    })
                    if (current.child_recursive && current.child_recursive.length > 0) {
                        this.getAllChildren(current.child_recursive, level + 1)
                    }
                }
            },
            onchange: function () {
                this.flag = false;
                axios.post('http://66estate.com/api/categories/attribute', this.categories_selected).then(res => {
                    this.attributes = res.data.attributes
                    this.flag = true
                }).catch(err => {
                    console.log(err)
                    this.flag = false
                })
            },
            addAttribute: function (event, index) {
                // if(!this.selectedAttribute.includes(event.target.value)){
                //     this.selectedAttribute.push(event.target.value)
                // }
                for (var i = 0; i < this.selectedAttribute.length; i++) {
                    var current = this.selectedAttribute[i];
                    if (current.index == index) {
                        this.selectedAttribute.splice(i, 1)
                    }
                }
                this.selectedAttribute.push({
                    'index': index,
                    'value': event.target.value
                })
                this.computedAttribute = []
                for (var i = 0; i < this.selectedAttribute.length; i++) {
                    this.computedAttribute.push(this.selectedAttribute[i].value)
                }
            }
        }
    }
</script>
