// $('#ship-box').on('click', function() {
//     $('#ship-box-info').slideToggle(1000);
// });

const Checkout = {
    data() {
        return {
            cart: null,
            count: null,
            total: null,
            user: {},
            value1: true,
            amount: {},
            subtotal: null
        };
    },
    mounted: function() {
		this.getShopping();
        this.getCountProduct();
        this.getSumProduct();
        this.getUser();
	},
    methods: {
        getShopping: function() {
            axios.get(this.$refs.getCard.value)
            .then(response => {
                this.cart = response.data.data
            });
        },
        getUser: function() {
            axios.get(this.$refs.getUser.value)
            .then(response => {
                // console.log(response.data.data);
                this.user = response.data.data
            });
        },
        getCountProduct: function() {
            axios.get(this.$refs.countProduct.value)
            .then(response => (this.count = response))
            console.log(this.count);
        },
        getSumProduct: function() {
            axios.get(this.$refs.sumProduct.value)
            .then(response => (
                this.subtotal = response.data.data,
                this.total = Math.ceil(this.subtotal * 1.16)
                ))
            // const resultad = this.total
            // this.totalAmount = resultad * 1.16
            // console.log(resultad);
        },
        formatNumber: function(value) {
            return new Intl.NumberFormat('es-MX', { style: 'currency', currency: 'MXN' }).format(value);
        },
        deleteProduct: function(id) {
            // console.log(id);
			axios.delete(this.$refs.getCard.value + '/' + id).then(response => { //eliminamos
				this.getShopping();
			});
		},
        payment: function() {
            const result = this.total * 1.16
            console.log(result)
            this.amount.total = result
            axios.post(this.$refs.postPayment.value, this.amount)
            .then(response => {
               console.log(response.data);
               window.location.href = response.data;
            });
        },
    }
};

Vue.createApp(Checkout).mount("#checkout");
