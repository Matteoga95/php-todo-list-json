const { createApp } = Vue

createApp({
    data() {
        return {
            newTask: "",
            tasks: [],
            api_url: 'server.php'
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data;
                })
                .catch(err => {
                    console.error(err.message);
                })
        },
        writeTask(url) {
            axios
                .post(url, {
                    newTask: this.newTask
                })
                .then(response => {
                    console.log(response);

                })
                .catch(err => {
                    console.error(err.message);
                })

        }
    },
    mounted() {
        this.readTasks(this.api_url);
        this.writeTask(this.api_url);
    }
}).mount('#app')
