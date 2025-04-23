import { Selector } from 'testcafe';

fixture`Test du formulaire`
    .page`http://localhost:8000/form.php`;

test('Le formulaire affiche les données en MAJUSCULES', async t => {
    await t
        .typeText('#lastname', ' badis')
        .typeText('#firstname', 'abid')
        .typeText('#age', '20')
        .click('button[type="submit"]')
        .expect(Selector('li').nth(0).innerText).contains(' BADIS')
        .expect(Selector('li').nth(1).innerText).contains('ABID')
        .expect(Selector('li').nth(2).innerText).contains('20');
});
