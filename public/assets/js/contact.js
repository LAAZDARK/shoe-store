const Contact = {
    data() {
        return {
            form: {
                name: '',
                email: '',
                message: '',
                telephone: '',
                subject: ''
            },
            send: ''
        };
    },
    methods: {
        async store () {
            await axios.post(this.$refs.storeContact.value, this.form)
            .then(response => {
                // console.log(response.data)
                this.send = response.data
                console.log(this.send);
                this.form.name = '',
                this.form.email = '',
                this.form.telephone = '',
                this.form.subject = '',
                this.form.message = ''
            }).catch(error => {
                console.log("Error Contact")
                console.log(error)
            })
            this.dialog = false
        }
    }
}

Vue.createApp(Contact).mount("#contact")
