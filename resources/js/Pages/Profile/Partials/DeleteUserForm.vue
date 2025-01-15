<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;
};

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;
    form.clearErrors();
    form.reset();
};
</script>

<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
                <h4 class="font-medium">Удаление аккаунта</h4>
                <p class="text-gray-500">Безвозвратное удаление</p>
            </div>
            <DangerButton @click="confirmUserDeletion">Удалить аккаунт</DangerButton>
        </header>
        <Modal :show="confirmingUserDeletion" @close="closeModal">
            <div class="flex flex-col gap-[10px] p-6">
                <h4 class="font-medium">
                    Вы уверены, что хотите удалить свою учетную запись?
                </h4>
                <p class="text-gray-500">
                    После удаления вашего аккаунта все его ресурсы и данные будут удалены навсегда. Введите пароль, чтобы подтвердить, что вы хотите навсегда удалить свой аккаунт.
                </p>
                <div class="mt-[10px]">
                    <InputLabel
                        for="password"
                        value="Пароль"
                        class="sr-only"
                    />
                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="Пароль"
                        @keyup.enter="deleteUser"
                    />
                </div>
                <div class="mt-[10px] flex justify-end">
                    <SecondaryButton @click="closeModal">
                        Отмена
                    </SecondaryButton>
                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                        Удалить аккаунт
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
