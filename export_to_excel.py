import pandas as pd
import sys
import json

# Load JSON input from command line argument
input_data = json.loads(sys.argv[1])

# Remove 'created_at' and 'updated_at' fields
for doctor in input_data:
    del doctor["created_at"]
    del doctor["updated_at"]

# Convert array of dictionaries to DataFrame
df = pd.DataFrame(input_data)

# Save DataFrame to an Excel file
excel_filename = "output.xlsx"
df.to_excel(excel_filename, index=False)

# Optionally, display the DataFrame
print(df)
