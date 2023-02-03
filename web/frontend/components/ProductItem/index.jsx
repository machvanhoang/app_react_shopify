import { Button } from "@shopify/polaris";
import { SettingsMinor } from "@shopify/polaris-icons";
export function ProductItem({ products }) {
    return (
        <>
            <div className="Polaris-DataTable__Table">
                <div
                    style={{
                        display: "flex",
                        justifyContent: "flex-start",
                        width: "100%",
                    }}
                >
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Title
                    </div>
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Image
                    </div>
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Type
                    </div>
                    <div
                        style={{
                            width: "40%",
                        }}
                    >
                        Handle
                    </div>
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Vendor
                    </div>
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Status
                    </div>
                    <div
                        style={{
                            width: "10%",
                        }}
                    >
                        Actions
                    </div>
                </div>
                <div>
                    {products &&
                        products.length &&
                        products.map((item, index) => {
                            return (
                                <div
                                    key={item.id}
                                    style={{
                                        display: "flex",
                                        justifyContent: "flex-start",
                                        width: "100%",
                                        borderBottom: "1px solid #ebebeb",
                                        borderRadius: "2px",
                                        paddingTop: 5,
                                        paddingBottom: 5,
                                    }}
                                >
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        {item.title}
                                    </div>
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        {item.image && (
                                            <>
                                                <span className="Polaris-Thumbnail_15hj1 Polaris-Thumbnail--sizeSmall_7647q">
                                                    <span className="Polaris-Icon_yj27d">
                                                        <img
                                                            alt={item.title}
                                                            src={item.image.src}
                                                            style={{
                                                                width: "100px",
                                                            }}
                                                        />
                                                    </span>
                                                </span>
                                            </>
                                        )}
                                        {!item.image && (
                                            <>
                                                <span className="Polaris-Thumbnail_15hj1 Polaris-Thumbnail--sizeSmall_7647q">
                                                    <span className="Polaris-Icon_yj27d">
                                                        <svg
                                                            viewBox="0 0 20 20"
                                                            className="Polaris-Icon__Svg_375hu"
                                                            focusable="false"
                                                            aria-hidden="true"
                                                            style={{
                                                                width: "100px",
                                                                height: "100px",
                                                            }}
                                                        >
                                                            <path d="M2.5 1a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-15a1.5 1.5 0 0 0-1.5-1.5h-15zm5 3.5c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm8.999 12.5h-13.002c-.41 0-.64-.46-.4-.79l3.553-4.051c.19-.21.52-.21.72-.01l1.63 1.851 3.06-4.781a.5.5 0 0 1 .84.02l4.039 7.011c.18.34-.06.75-.44.75z"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </>
                                        )}
                                    </div>
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        {item.product_type}
                                    </div>
                                    <div
                                        style={{
                                            width: "40%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        {item.handle}
                                    </div>
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        {item.vendor}
                                    </div>
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        <span
                                            className={
                                                item.status == "active"
                                                    ? "Polaris-Badge_2qgie Polaris-Badge--statusSuccess_pc5rl"
                                                    : "Polaris-Badge_2qgie Polaris-Badge--statusInfo_knr66"
                                            }
                                        >
                                            {item.status}
                                        </span>
                                    </div>
                                    <div
                                        style={{
                                            width: "10%",
                                            alignItems: "center",
                                            justifyContent: "flex-start",
                                            display: "flex",
                                        }}
                                    >
                                        <Button
                                            accessibilityLabel="Terms and conditions (opens a new window)"
                                            icon={SettingsMinor}
                                            external
                                        >
                                            Add Zip Code
                                        </Button>
                                    </div>
                                </div>
                            );
                        })}
                </div>
            </div>
        </>
    );
}
