<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container">
        <h3>Check your transactions</h3>
        <form action="<?php echo URL_WITH_INDEX_FILE; ?>home/check_transaction" method="POST">
            <label>Name: </label>
            <input type="text" name="name" value="" required />
            <label>Password: </label>
            <input type="password" name="password" value="" required />
            <input type="submit" name="submit_check_transaction" value="Submit" />
        </form>

        <?php if(isset($transactions)) { ?>
        <h3>List of transaction for your account</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>From</td>
                <td>Amount</td>
                <td>To</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($transactions as $transaction) { ?>
                <tr>
                    <td><?php if (isset($transaction->user)) echo $transaction->user; ?></td>
                    <td><?php if (isset($transaction->amount)) echo $transaction->amount; ?></td>
                    <td><?php if (isset($transaction->to_user)) echo $transaction->to_user; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>
