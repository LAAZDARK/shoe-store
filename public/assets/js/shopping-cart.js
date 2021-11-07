const ShoppingCartD = {
    data() {
        return {
            cart: null,
            form: {
                'product_id': '',
                'size': '',
                'price': '',
                'productName': ''
            },
        };
    },
    methods: {
        addCart: function() {
            this.form.product_id = this.$refs.product_id.value;
            this.form.size = this.$refs.product_size.value;
            this.form.price = this.$refs.price.value;
            this.form.productName = this.$refs.product_name.value;

            console.log(this.form);

            this.addProduct();
        },
        addProduct: function() {
            console.log(this.form);
			axios.post(this.$refs.storeCard.value, this.form).then(response => {
                console.log('Se agrego correctamente');
                location.reload();

			}).catch(error => {
                console.log('Error');

				// error = 'Corrija para poder crear con éxito'
			});

		}
    }
}


Vue.createApp(ShoppingCartD).mount("#shopping-cart")
