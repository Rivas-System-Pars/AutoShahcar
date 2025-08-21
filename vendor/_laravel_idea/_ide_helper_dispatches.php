<?php //2e4b3dbae1ca3ecf1f844b34cb7aed96
/** @noinspection all */

namespace App\Events {

    use App\Models\Contact;
    use App\Models\Order;
    use App\Models\Wallet;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(Contact $contact)
     * @method static PendingBroadcast broadcast(Contact $contact)
     */
    class ContactCreated {}

    /**
     * @method static void dispatch($order)
     * @method static PendingBroadcast broadcast($order)
     */
    class OrderCreated {}

    /**
     * @method static void dispatch(Order $order)
     * @method static PendingBroadcast broadcast(Order $order)
     */
    class OrderPaid {}

    /**
     * @method static void dispatch(Wallet $wallet)
     * @method static PendingBroadcast broadcast(Wallet $wallet)
     */
    class WalletAmountDecreased {}

    /**
     * @method static void dispatch(Wallet $wallet)
     * @method static PendingBroadcast broadcast(Wallet $wallet)
     */
    class WalletAmountIncreased {}
}

namespace App\Jobs {

    use App\Models\Order;
    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(Order $order)
     * @method static void dispatchNow(Order $order)
     * @method static void dispatchSync(Order $order)
     */
    class CancelOrder {}
}

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchNow(array $data)
     * @method static void dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     * @method static void dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Maatwebsite\Excel\Jobs {

    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Maatwebsite\Excel\Concerns\FromQuery;
    use Maatwebsite\Excel\Concerns\FromView;
    use Maatwebsite\Excel\Files\TemporaryFile;

    /**
     * @method static PendingDispatch dispatch(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static void dispatchNow(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static void dispatchSync(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     */
    class AppendDataToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static void dispatchNow(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static void dispatchSync(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     */
    class AppendQueryToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static void dispatchNow(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static void dispatchSync(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     */
    class AppendViewToSheet {}

    /**
     * @method static PendingDispatch dispatch(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static void dispatchNow(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static void dispatchSync(object $export, TemporaryFile $temporaryFile, string $writerType)
     */
    class QueueExport {}

    /**
     * @method static PendingDispatch dispatch(ShouldQueue $import = null)
     * @method static void dispatchNow(ShouldQueue $import = null)
     * @method static void dispatchSync(ShouldQueue $import = null)
     */
    class QueueImport {}
}

namespace RachidLaasri\LaravelInstaller\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    use Illuminate\Http\Request;

    /**
     * @method static void dispatch(Request $request)
     * @method static PendingBroadcast broadcast(Request $request)
     */
    class EnvironmentSaved {}
}

namespace Shetabit\Payment\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    use Shetabit\Multipay\Contracts\DriverInterface;
    use Shetabit\Multipay\Contracts\ReceiptInterface;
    use Shetabit\Multipay\Invoice;

    /**
     * @method static void dispatch(DriverInterface $driver, Invoice $invoice)
     * @method static PendingBroadcast broadcast(DriverInterface $driver, Invoice $invoice)
     */
    class InvoicePurchasedEvent {}

    /**
     * @method static void dispatch(ReceiptInterface $receipt, DriverInterface $driver, Invoice $invoice)
     * @method static PendingBroadcast broadcast(ReceiptInterface $receipt, DriverInterface $driver, Invoice $invoice)
     */
    class InvoiceVerifiedEvent {}
}
