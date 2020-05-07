<template>
    <div class="bg form row justify-content-center">
        <h3>Вітаємо!</h3>

        <div class="input-field">
            <input
                id="name"
                v-model="name"
                type="text"
                class="validate"
            />

            <label for="name">Імя</label>
        </div>

        <div class="input-field">
            <input
                id="email"
                v-model="email"
                type="text"
                class="validate"
            />

            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input
                id="password"
                v-model="password"
                type="password"
                class="validate"
               
            />
            <label for="password">Password</label>
        </div>

        <p>
            Уже є аккаунт?
            <a href="/login">Увійдіть</a>
        </p>

        <span v-if="err" class="helper-text invalid">
            Помилка валідації в одному з полів
        </span>

        <Button text="Зареєструватися" />
    </div>
</template>

<script>
import Button from "../../components/Button";

export default {
    name: "Register",

    components: {
        Button
    },

    data() {
        return {
            name: "",
            email: "",
            password: "",
            err: ""
        };
    },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/app";

.bg {
    background-color: $light-gray;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1rem;
    margin-bottom: auto;
    padding: 1rem;
    margin-left: auto;
    margin-right: auto;
}

.invalid {
    color: #f44336;
}

.input-field label {
    color: #000;
}

.input-field input[type="text"]:focus + label {
    color: #000;
}

.input-field input[type="password"]:focus + label {
    color: #000;
}

.input-field input[type="text"]:focus {
    border-bottom: 1px solid #000;
    box-shadow: 0 1px 0 0 #000;
}

.input-field input[type="text"][type="password"].valid {
    border-bottom: 1px solid #000;
    box-shadow: 0 1px 0 0 #000;
}

.input-field input[type="password"][type="password"]:focus {
    border-bottom: 1px solid #000;
    box-shadow: 0 1px 0 0 #000;
}

.input-field .prefix.active {
    color: #000;
}
</style>
