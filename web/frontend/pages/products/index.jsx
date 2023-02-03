import {
    Card,
    Page,
    Layout,
    TextContainer,
    Heading,
    DataTable,
} from "@shopify/polaris";
import { TitleBar } from "@shopify/app-bridge-react";
import { useAppQuery, useAuthenticatedFetch } from "../../hooks";
import { useState } from "react";
import { ProductItem } from "../../components";
export default function Index() {
    const emptyToastProps = { content: null };
    const [isLoading, setIsLoading] = useState(true);
    const [toastProps, setToastProps] = useState(emptyToastProps);
    const fetch = useAuthenticatedFetch();
    const [products, setProducts] = useState([]);

    const {
        data,
        refetch: refetchProductCount,
        isLoading: isLoadingCount,
        isRefetching: isRefetchingCount,
    } = useAppQuery({
        url: "/api/products/list",
        reactQueryOptions: {
            onSuccess: (res) => {
                setIsLoading(false);
                const { products } = res;
                setProducts(products);
            },
        },
    });
    return (
        <Page fullWidth>
            <TitleBar
                title="Products"
                primaryAction={{
                    content: "Primary action",
                    onAction: () => console.log("Primary action"),
                }}
                secondaryActions={[
                    {
                        content: "Secondary action",
                        onAction: () => console.log("Secondary action"),
                    },
                ]}
            />
            <Layout>
                <Layout.Section fullWidth>
                    <Card sectioned>
                        <ProductItem products={products} />
                    </Card>
                </Layout.Section>
            </Layout>
        </Page>
    );
}
