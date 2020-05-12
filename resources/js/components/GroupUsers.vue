<template>
    <div>
        <div class="form-group row">
            <label
                for="member_name"
                class="col-md-4 col-form-label text-md-right"
            >
                Імя учасника
            </label>

            <div class="col-md-6">
                <div v-for="n in users" :key="n">
                    <input
                        id="member_name"
                        type="text"
                        class="form-control mb-3"
                        name="member_name"
                        required
                    />
                </div>

                <Button text="Додати учасника" @click="clickHandler" />
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-dark">
                    Створити
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Button from "./Button";

export default {
    name: "group-users",

    components: {
        Button
    },

    data() {
        return {
            users: 1
        };
    },

    methods: {
        clickHandler() {
            console.log(this.users);
            
            this.users = this.users + 1;
        }
    }
};
</script>
