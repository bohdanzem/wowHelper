<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <input v-model="chars" @keyup="search()">
                    </div>

                    <div class="card-body">
                        <div v-if="error">
                            {{ error }}
                        </div>
                        <div v-for="wordsList, id1 in words" :key="id1">
                            {{ id1 }}: <span v-for="word, id2 in wordsList" :key="id2">{{ word }} </span>
                        </div>
                        {{ message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                chars: [],
                words: [],
                error: '',
                message: '',
            };
        },
        methods: {
            search() {
                this.error = '';
                this.words = [];
                this.message = '...';
                if (this.chars.length === 0) {
                    return;
                }
                let chars = this.chars;
                axios.get('api/search/' + this.chars)
                    .then((response) => {
                        if (chars !== this.chars) {
                            return;
                        }
                        this.words = response.data;
                        this.message = _.isEmpty(this.words) ? '-' : '';
                    })
                    .catch((error) => {
                        this.error = error;
                        this.message = '';
                    });
            },
        },
    }
</script>
